<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class tokenRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'The :attribute is required.',
            'password.required' => 'The :attribute is required.',
            'device_name.required' => 'The :attribute is required.'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'User email',
            'password' => 'User password',
            'device_name' => 'Device name',
        ];
    }
}
