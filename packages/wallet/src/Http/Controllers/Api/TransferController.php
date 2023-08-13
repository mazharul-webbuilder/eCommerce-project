<?php

namespace Incevio\Package\Wallet\Http\Controllers\Api;

use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Incevio\Package\Wallet\Models\Transaction;
use Incevio\Package\Wallet\Services\CommonService;
use Incevio\Package\Wallet\Http\Requests\TransferRequest;

class TransferController extends Controller
{
    /**
     * Transfer balance to Other Customer
     * @param TransferRequest $request
     * @return RedirectResponse
     */
    public function transfer(TransferRequest $request)
    {
        $fromWallet = null;
        $toWallet = null;

        $toWallet = Customer::where('email', $request->email)->first();
        if (!$toWallet) {
            return response()->json([
                'message' => trans('wallet::lang.email_not_found')
            ], 400);
        }

        try {
            $fromWallet = Auth::guard('api')->user();
            $meta = $this->getMeta($request, $toWallet, $fromWallet);

            (new CommonService())->transfer($fromWallet->wallet, $toWallet->wallet, $request->amount, $meta);
        } catch (\Exception $exception) {
            Log::error('Transfer failed:: ');
            Log::info($exception);

            return response()->json([
                'message' => $exception->getMessage()
            ], 400);
        }

        return response()->json([
            'message' => trans('wallet::lang.transfer_success')
        ], 200);
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
                'description' => "Balance transferred to " . $request->email
            ],
            'to' => [
                'type' => Transaction::TYPE_DEPOSIT,
                'from' => $from->email,
                'description' => "Balance Received from " . $from->email
            ]
        ];
    }
}
