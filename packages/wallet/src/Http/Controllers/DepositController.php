<?php

namespace Incevio\Package\Wallet\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Contracts\PaymentServiceContract;
use App\Services\Payments\PaymentService;
use Incevio\Package\Wallet\Jobs\PayoutJob;
use Incevio\Package\Wallet\Models\Transaction;
use Incevio\Package\Wallet\Notifications\Deposit;
use App\Services\Payments\PaypalExpressPaymentService;
use Incevio\Package\Wallet\Http\Requests\DepositRequest;

class DepositController extends TransactionController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show_form(Request $request)
    {
        $paymentMethods = PaymentMethod::find(get_from_option_table('wallet_payment_methods', []));

        if (Auth::guard('customer')->check()) {
            $tab = 'wallet';
            $customer = Auth::guard('customer')->user();

            // View loaded from theme directory, need to do in better ways
            $content = view('wallet::customer.deposit', compact('paymentMethods', 'customer'))->render();

            return view('theme::dashboard', compact('tab', 'content'));
        }

        if (Auth::user()->isMerchant()) {
            $merchant = Auth::user()->shop;

            return view('wallet::deposit', compact('paymentMethods', 'merchant'));
        }

        return redirect()->back()->with('error', trans('wallet::lang.owner_invalid'));
    }

    /**
     * @param DepositRequest $request
     * @param PaymentServiceContract $paymentService
     * @return RedirectResponse
     */
    public function deposit(DepositRequest $request, PaymentServiceContract $paymentService)
    {
        try {
            $result = $paymentService->setReceiver('platform')
                ->setAmount($request->amount)
                ->setDescription(trans('wallet::lang.deposit_description', [
                    'marketplace' => get_platform_title(),
                    'payment_method' => $request->payment_method
                ]))
                ->setConfig()
                ->charge();
        } catch (\Exception $e) {
            Log::error('Payment failed:: ');
            Log::info($e);

            return redirect()->route($this->get_route())
                ->with('error', $e->getMessage())->withInput();
        }

        // Check if the result is a RedirectResponse of Paypal and some other gateways
        if ($result instanceof RedirectResponse) {
            return $result;
        }

        // Payment succeed
        if ($result->status == PaymentService::STATUS_PAID) {
            return $this->depositCompleted($request->amount, $this->getMetaInfo($request->payment_method));
        }

        return redirect()->route($this->get_route())
            ->with('error', trans('wallet::lang.payment_failed'))->withInput();
    }

    /**
     * @param Request $request
     * @param PaypalExpressPaymentService $paymentService
     * @return RedirectResponse
     */
    public function paypalPaymentSuccess(Request $request, PaypalExpressPaymentService $paymentService)
    {
        if (!$request->has('token') || !$request->has('paymentId') || !$request->has('PayerID')) {
            return redirect()->route('wallet.deposit.failed');
        }

        try {
            $paymentService = $paymentService->paymentExecution($request->get('paymentId'), $request->get('PayerID'));
            //dd($paymentService);
        } catch (\Exception $e) {
            Log::error('Payment failed:: ');
            Log::info($e->getMessage());

            return redirect()->route($this->get_route())
                ->with('error', $e->getMessage())->withInput();
        }

        // Payment succeed
        if ($paymentService->status == PaymentService::STATUS_PAID && $paymentService->response) {
            $amount = $paymentService->response->transactions[0]->amount->total;

            return $this->depositCompleted($amount, $this->getMetaInfo("Paypal"));
        }

        return redirect()->route($this->get_route())
            ->with('error', trans('wallet::lang.payment_failed'))->withInput();
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function paymentFailed(Request $request)
    {
        return redirect()->route($this->get_route())
            ->with('error', trans('wallet::lang.payment_failed'))->withInput();
    }

    /**
     * Complete the deposit fund
     *
     * @param $amount
     * @param array $meta
     * @param bool $confirm
     * @return RedirectResponse
     */
    private function depositCompleted($amount, $meta = [], $confirm = true)
    {
        try {
            $meta = array_merge([
                'type' => Transaction::TYPE_DEPOSIT,
            ], $meta);

            $wallet = $this->get_wallet();

            $trans = $wallet->deposit($amount, $meta, $confirm);
        } catch (\Exception $e) {
            return redirect()->route($this->get_route())
                ->with('error', trans('wallet::lang.payment_failed'))->withInput();
        }

        PayoutJob::dispatch($trans, Deposit::class);

        return redirect()->route($this->get_route('wallet'))
            ->with('success', trans('wallet::lang.payment_success'));
    }

    /**
     * Paystack success:
     * @param Request $request
     * @return RedirectResponse
     */
    public function paystackPaymentSuccess(Request $request)
    {
        if ($request->has('trxref') && $request->has('reference')) {
            $paymentService = new \Incevio\Package\Paystack\Services\PaystackPaymentService($request);

            $response = $paymentService->setConfig()->verifyPaidPayment();

            // If the payment failed
            if ($response->status == PaymentService::STATUS_PAID) {
                return $this->depositCompleted($response->amount, $this->getMetaInfo("Paystack"));
            }
        }

        return redirect()->route($this->get_route())
            ->with('error', trans('wallet::lang.payment_failed'))->withInput();
    }

    /**
     * Sslcommerz success:
     * @param Request $request
     * @return RedirectResponse
     */
    public function sslcommerzPaymentSuccess(Request $request)
    {
        $paymentService = new \Incevio\Package\SslCommerz\Services\SslCommerzPaymentService($request);

        if ($paymentService->verifyPaidPayment()) {
            return $this->depositCompleted($request->amount, $this->getMetaInfo("sslcommerz"));
        }

        return redirect()->route($this->get_route())
            ->with('error', trans('wallet::lang.payment_failed'))->withInput();
    }

    /**
     * flutterwave success:
     * @param Request $request
     * @return RedirectResponse
     */
    public function flutterwavePaymentRedirect(Request $request)
    {
        if ($request->status == 'successful') {
            $flutter = new \Incevio\Package\FlutterWave\Services\FlutterWavePaymentService($request);
            $response = $flutter->verifyPaidPayment();

            if ($response->status == PaymentService::STATUS_PAID) {
                return $this->depositCompleted($response->amount, $this->getMetaInfo("flutterwave"));
            }
        }

        return redirect()->route($this->get_route())
            ->with('error', trans('wallet::lang.payment_failed'))->withInput();
    }


    /**
     * Instamojo success:
     * @param Request $request
     * @return RedirectResponse
     */
    public function instamojoPaymentSuccess(Request $request)
    {
        $instamojo = new \Incevio\Package\Instamojo\Services\InstamojoPaymentService($request);
        $response = $instamojo->setConfig()->verifyPaidPayment();

        if ($response->status == PaymentService::STATUS_PAID) {
            return $this->depositCompleted($response->amount, $this->getMetaInfo("instamojo"));
        }

        return redirect()->route($this->get_route())
            ->with('error', trans('wallet::lang.payment_failed'))->withInput();
    }

    /**
     * return formated meta info for the transection
     *
     * @return str
     */
    private function getMetaInfo($payment)
    {
        return [
            'description' => trans('wallet::lang.deposit_description', [
                'marketplace' => get_platform_title(),
                'payment_method' => $payment
            ])
        ];
    }
}
