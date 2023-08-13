<?php

namespace Incevio\Package\Wallet\Http\Controllers;

use App\Models\Shop;
use App\Models\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
  /**
   * Get the wallet based on user type
   *
   * @return Shop | Customer
   */
  protected function get_wallet($user = 'customer', $email = null)
  {
    // When the email is given, find the user and return
    if ($email) {
      if ($user == 'customer') {
        return Customer::where('email', $email)->first();
      }

      return Shop::where('email', $email)->first();
    }

    // $email not given, return loggened in user's wallet
    if (Auth::guard('customer')->check()) {
      return Auth::guard('customer')->user();
    }

    return Auth::guard('web')->user()->shop;
  }

  /**
   * Get the route name based on user type
   *
   * @return str
   */
  protected function get_route($path = 'deposit')
  {
    // On success route to the wallet page
    if ($path == 'wallet') {
      return Auth::guard('customer')->check() ? 'customer.account.wallet' : 'merchant.wallet';
    }

    return Auth::guard('customer')->check() ? 'customer.account.wallet.deposit.form' : 'merchant.wallet.deposit.form';
  }
}
