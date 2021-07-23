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
            'phone'     => 'bail|required|regex:/\+?(?:38)?\(0\d{2}\)\-\d{3}\-\d{4}/',
            'type'      => 'bail|required|exists:types',
            'image'     => 'bail|required_without:message|image',
            'message'   => 'bail|required_without:image|min:24|max:1024',
            'width'     => 'bail|required|numeric|min:1',
            'height'    => 'bail|required|numeric|min:1',
            'font'      => 'bail|required_with:message|exists:fonts',
            'place'     => 'bail|required|exists:places',
        ];
    }
}
