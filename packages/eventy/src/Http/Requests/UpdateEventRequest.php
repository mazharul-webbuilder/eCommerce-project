<?php

namespace Incevio\Package\Eventy\Http\Requests;

use App\Http\Requests\Request;

class UpdateEventRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'title' => 'required',
           'description' => 'required',
           'venue' => 'required',
           'status' => 'required|integer',
           'public' => 'required|boolean',
           'starts' => 'required|date',
           'ends' => 'required|date',
           'images.*.feature' => 'required|mimes:jpg,jpeg,png,gif',
        ];
    }

   /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            // 'amount.min' => trans('wallet::lang.composite_unique'),
        ];
    }
}
