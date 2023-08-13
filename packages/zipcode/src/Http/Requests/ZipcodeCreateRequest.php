<?php

namespace Incevio\Package\zipcode\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class ZipcodeCreateRequest extends Request
{
    public function authorize()
    {
        return Auth::user()->isAdmin();
    }

    public function rules()
    {
        $this->merge(['zip' => $this->get('zipcodes')]);

        return [
            'country_id' => 'required',
            'state_id' => 'required',
            'city' => 'required',
            'zipcodes' => 'required',
           /* 'lat' => 'required',
            'lng' => 'required',*/
            'timezone' => 'required',
            'daylight_savings' => 'required',
        ];
    }

}
