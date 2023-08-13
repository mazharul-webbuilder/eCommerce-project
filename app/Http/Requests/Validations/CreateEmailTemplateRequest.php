<?php

namespace App\Http\Requests\Validations;

use App\Http\Requests\Request;

class CreateEmailTemplateRequest extends Request
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
        if ($shop_id) {
            $this->merge([
                'shop_id' => $shop_id,
                'template_for' => 'Merchant'
            ]); //Set merchant info
        }

        return [
            'name' => 'required',
            'type' => 'required',
            'sender_name' => 'required',
            'sender_email' => 'required|email',
            'subject' => 'required',
            'body' => 'required',
        ];
    }
}
