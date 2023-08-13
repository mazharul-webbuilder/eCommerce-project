<?php

namespace App\Http\Requests\Validations;

use App\Http\Requests\Request;

class UpdateStateRequest extends Request
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
        $state = $this->route('state');

        return [
            'name' => 'required|string',
            'iso_code' => 'bail|required|composite_unique:states,country_id:' . $state->country_id . ',' . $state->id,
            'active' => 'required',
        ];
    }
}
