<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminPatientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone'=>['required','unique:patients,phone','regex:/(01)[0-9]{9}/'],
            'email' => ['required', 'max:255', 'email', 'unique:patients,email'],
            'password' => 'required|confirmed|min:6',


        ];
    }

  
    public function authorize()
    {
        return true;
    }
}
