<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'message'   => 'bail|required|min:24|max:1024',
        ];
    }
}
