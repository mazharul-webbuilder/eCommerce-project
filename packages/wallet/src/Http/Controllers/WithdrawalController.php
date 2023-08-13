<?php

namespace Incevio\Package\Wallet\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Incevio\Package\Wallet\Http\Requests\WithdrawalRequest;
use Incevio\Package\Wallet\Jobs\PayoutJob;
use Incevio\Package\Wallet\Models\Transaction;
use Incevio\Package\Wallet\Notifications\Pending;

class WithdrawalController extends Controller
{
  /**
   * Show the withdrwal form
   *
   * @param Request $request
   * @return response
   */
  public function form(Request $request)
  {
    $minimum = get_min_withdrawal_limit();
    $balance = Auth::user()->shop->balance;

    return view('wallet::_withdraw', compact('balance', 'minimum'));
  }

  /**
   * Submit the withdrawal request
   *
   * @param WithdrawalRequest $request
   * @return response
   */
  public function withdraw(WithdrawalRequest $request)
  {
    $meta = [
      'type' => Transaction::TYPE_PAYOUT,
      'description' => trans('wallet::lang.payout_requested'),
    ];

    $transaction = Auth::user()->shop->withdraw($request->amount, $meta, false, false);

    PayoutJob::dispatch($transaction, Pending::class);

    return redirect()->route('merchant.wallet')
      ->with('success', trans('wallet::lang.payout_requested'));
  }
}
