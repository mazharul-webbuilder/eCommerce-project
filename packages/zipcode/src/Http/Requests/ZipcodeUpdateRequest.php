<?php

namespace Incevio\Package\zipcode\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class ZipcodeUpdateRequest extends Request
{
    public function authorize()
    {
        //return Auth::user()->isAdmin();
        return true;
    }

    public function rules()
    {
        return [
            'default_zipcode' => 'required|numeric|digits:'.config('zipcode.length')
        ];

    }

    public function messages()
    {
        return [
            //'default_zipcode' => 'Zipcode have to be '.config('zipcode.length'). ' digits.'
        ];

    }

}