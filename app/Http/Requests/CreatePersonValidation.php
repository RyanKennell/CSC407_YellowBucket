<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePersonValidation extends FormRequest
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
            'firstname'   => ['required', 'max:64'],
            'lastname'    => ['required', 'max:64'],
            'email'       => ['required', 'email'],
        ];
    }

    public function messages()
    {
        return [
            'firstname.required' => 'C\'mon, give us a name',
            'lastname.required' => 'You must share your last name with us',
            'email.required'  => 'An email address is required',
            'email.email' => 'We need a valid email address',
        ];
    }
}
