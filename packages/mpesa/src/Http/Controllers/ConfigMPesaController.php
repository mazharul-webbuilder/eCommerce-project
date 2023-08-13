<?php

namespace Incevio\Package\MPesa\Http\Controllers;

// use App\Common\Authorizable;
use App\Http\Controllers\Controller;
use Incevio\Package\MPesa\Models\ConfigMPesa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ConfigMPesaController extends Controller
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

        $config = ConfigMPesa::firstOrCreate(['shop_id' => $this->getShopId()]);

        return view('mpesa::config', compact('config'));
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
        $config = ConfigMPesa::firstOrCreate(['shop_id' => $this->getShopId()]);

        $config->update($request->all());

        return back()->with('success', trans('messages.created', ['model' => $this->model_name]));
    }

    /**
     * Deactivate the Paypal Express checkout gateway
     *
     * @return \Illuminate\Http\Response
     */
    public function deactivate()
    {
        $config = ConfigMPesa::firstOrCreate(['shop_id' => $this->getShopId()]);

        $config->delete();

        return back()->with('success', trans('messages.updated', ['model' => $this->model_name]));
    }

    /**
     * Return shop id
     */
    private function getShopId()
    {
        return  Auth::user()->merchantId() ?? request()->session()->get('impersonated');
    }
}
