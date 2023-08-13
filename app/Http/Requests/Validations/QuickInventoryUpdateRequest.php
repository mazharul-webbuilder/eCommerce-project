<?php

namespace App\Http\Requests\Validations;

use App\Http\Requests\Request;

class QuickInventoryUpdateRequest extends Request
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
        $shop_id = $this->user()->merchantId(); //Get current user's shop_id

        // Current model ID
        if ($this->is('api/vendor/*')) {
            $id = $this->route('inventory_id');
        } else {
            $id = $this->route('inventory');
        }

        $rules = [
            'title' => 'required',
            'sale_price' => 'required|numeric',
            'active' => 'required',
        ];

        if (is_incevio_package_loaded('pharmacy')) {
            $expiry_date_required = get_from_option_table('pharmacy_expiry_date_required', 1);

            $rules['expiry_date'] = (bool) $expiry_date_required ? 'required|date' : 'nullable|date';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required_with.required' => trans('validation.offer_start_required'),
            'offer_start.after_or_equal' => trans('validation.offer_start_after'),
            'required_with.required' => trans('validation.offer_end_required'),
            'offer_end.after' => trans('validation.offer_end_after'),
        ];
    }
}
