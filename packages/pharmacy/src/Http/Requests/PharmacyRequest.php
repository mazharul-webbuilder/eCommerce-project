<?php

namespace Incevio\Package\Pharmacy\Http\Requests;

use App\Http\Requests\Request;

class PharmacyRequest extends Request
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'listings' => 'required_without:featured',
            'featured' => 'required_without:listings'
        ];
    }

}