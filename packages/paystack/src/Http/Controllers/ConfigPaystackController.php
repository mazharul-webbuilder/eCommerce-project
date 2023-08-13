<?php

namespace Incevio\Package\Paystack\Http\Controllers;

// use App\Common\Authorizable;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Incevio\Package\Paystack\Models\ConfigPaystack;

class ConfigPaystackController extends Controller
{
    // use Authorizable;

    private $model_name;

    /**
     * construct
     */
    public function __construct()
    {
        parent::__construct();

        $this->model_name = trans('app.model.payment_method');
    }

    /**
     * Activate the Paypal Express checkout gateway
     *
     * @return \Illuminate\Http\Response
     */
    public function activate()
    {
        if (config('app.demo') == true) {
            return view('demo_modal');
        }

        $paystack = ConfigPaystack::firstOrCreate(['shop_id' => Auth::user()->merchantId()]);

        return view('paystack::config', compact('paystack'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $paystack = ConfigPaystack::firstOrCreate(['shop_id' => Auth::user()->merchantId()]);

        $paystack->update($request->all());

        return back()->with('success', trans('messages.created', ['model' => $this->model_name]));
    }

    /**
     * Deactivate the Paypal Express checkout gateway
     *
     * @return \Illuminate\Http\Response
     */
    public function deactivate()
    {
        $paystack = ConfigPaystack::firstOrCreate(['shop_id' => Auth::user()->merchantId()]);

        $paystack->delete();

        return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));
    }
}
