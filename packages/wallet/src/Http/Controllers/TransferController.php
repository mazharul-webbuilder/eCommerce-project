<?php

namespace Incevio\Package\Wallet\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Incevio\Package\Wallet\Models\Transaction;
use Incevio\Package\Wallet\Services\CommonService;
use Incevio\Package\Wallet\Http\Requests\TransferRequest;

class TransferController extends TransactionController
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show_form(Request $request)
    {
        $wallet = $this->get_wallet();

        if (Auth::guard('customer')->check()) {
            $tab = 'wallet';

            $content = view('wallet::customer._transfer', compact('wallet'))->render();

            return view('theme::dashboard', compact('tab', 'content'));
        }

        return view('wallet::_transfer', compact('wallet'));
    }

    /**
     * Transfer balance to Other Customer
     * @param TransferRequest $request
     * @return RedirectResponse
     */
    public function transfer(TransferRequest $request)
    {
        $user_type = Auth::guard('customer')->check() ? 'customer' : 'shop';

        $toWallet = $this->get_wallet($user_type, $request->email);
        if (!$toWallet) {
            return redirect()->back()->withInput()
                ->with('warning', trans('wallet::lang.email_not_found'));
        }

        try {
            $fromWallet = $this->get_wallet();

            $meta = $this->getMeta($request, $toWallet, $fromWallet);

            (new CommonService())->transfer($fromWallet->wallet, $toWallet->wallet, $request->amount, $meta);
        } catch (\Exception $exception) {
            Log::error('Transfer failed:: ');
            Log::info($exception);

            return redirect()->route($this->get_route())
                ->with('warning', $exception->getMessage())->withInput();
        }

        return redirect()->route($this->get_route('wallet'))
            ->with('success', trans('wallet::lang.transfer_success'));
    }

    /**
     * get Formatted meta:
     * @param $request
     * @param $customer
     * @return array[]
     */
    private function getMeta($request, $to, $from)
    {
        return [
            'from' => [
                'type' => Transaction::TYPE_WITHDRAW,
                'to' => $to->email,
                'description' => trans('wallet::lang.balance_sent_to', ['email' => $request->email])
            ],
            'to' => [
                'type' => Transaction::TYPE_DEPOSIT,
                'from' => $from->email,
                'description' => trans('wallet::lang.balance_received_from', ['email' => $from->email])
            ]
        ];
    }
}
