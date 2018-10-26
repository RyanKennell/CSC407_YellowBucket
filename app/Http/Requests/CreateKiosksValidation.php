<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateKiosksValidation extends FormRequest
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
            'location'   => ['required', 'max:128'],
            'address'  => ['max:512'],

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'location.required' => 'C\'mon, give us a location',
            'address.required' => 'You must fill in the right address',
        ];
    }

}
