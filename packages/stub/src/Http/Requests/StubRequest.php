<?php

namespace Incevio\Package\Stub\Http\Requests;

use Auth;
use App\Http\Requests\Request;

class StubRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->isFromPlatform();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // Reles
        ];
    }
}
