<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculatorRequest extends FormRequest
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
            'name'      => 'bail|required|min:2|max:128|string',
            'phone'     => 'bail|required|regex:/\+?(?:38)?0\d{9}/',
            'type'      => 'bail|required|exists:types,name',
            'width'     => 'bail|required|numeric|min:1',
            'height'    => 'bail|required|numeric|min:1',
            'font'      => 'bail|required|exists:fonts,name',
            'place'     => 'bail|required|exists:places,name',
        ];
    }
}
