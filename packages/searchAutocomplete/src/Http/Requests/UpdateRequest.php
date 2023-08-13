<?php

namespace Incevio\Package\SearchAutocomplete\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class UpdateRequest extends Request
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "settings.min_char"    => "required|integer|min:3",
            "settings.max_result"  => "required|integer|min:1",
            "settings.show_char"   => "required|integer|min:3",
            "styling_css"    => "required|valid_css",
        ];
    }
}
