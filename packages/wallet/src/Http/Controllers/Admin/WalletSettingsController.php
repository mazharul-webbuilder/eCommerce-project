<?php

namespace Incevio\Package\Wallet\Http\Controllers\Admin;

use App\Models\PaymentMethod;
// use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Incevio\Package\Wallet\Models\Wallet;

class WalletSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('setting', Wallet::class);
        $paymentMethods = PaymentMethod::online()->active()->pluck('name', 'id')->toArray();

        return view('wallet::admin.settings', compact('paymentMethods'));
    }
}
