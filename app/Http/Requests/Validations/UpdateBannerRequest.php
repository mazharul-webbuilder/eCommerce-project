<?php

namespace App\Http\Requests\Validations;

use App\Http\Requests\Request;

class UpdateBannerRequest extends Request
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
        $rules = [
            'group_id' => 'required',
            'title' => 'max:255',
            'description' => 'max:255',
        ];

        if (!$this->route()->banner->featureImage) {
            $rules['images.feature'] = 'required|mimes:jpg,jpeg,png,gif';
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
            'group_id.required' => trans('validation.banner_group_id_required'),
            'images.feature.required' => trans('validation.banner_image_required'),
        ];
    }
}
