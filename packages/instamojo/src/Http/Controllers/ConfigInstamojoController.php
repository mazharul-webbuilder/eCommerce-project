<?php

namespace Incevio\Package\Instamojo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Incevio\Package\Instamojo\Models\ConfigInstamojo;

class ConfigInstamojoController extends Controller
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

        $instamojo = ConfigInstamojo::firstOrCreate(['shop_id' => Auth::user()->merchantId()]);

        return view('instamojo::config', compact('instamojo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $instamojo = ConfigInstamojo::firstOrCreate(['shop_id' => Auth::user()->merchantId()]);

        $instamojo->update($request->all());

        return back()->with('success', trans('messages.created', ['model' => $this->model_name]));
    }

    /**
     * Deactivate the Paypal Express checkout gateway
     *
     * @return \Illuminate\Http\Response
     */
    public function deactivate()
    {
        $instamojo = ConfigInstamojo::firstOrCreate(['shop_id' => Auth::user()->merchantId()]);

        $instamojo->delete();

        return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));
    }
}
