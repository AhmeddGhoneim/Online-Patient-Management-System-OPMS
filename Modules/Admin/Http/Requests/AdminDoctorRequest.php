<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminDoctorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'phone'=>['required','unique:doctors,phone','regex:/(01)[0-9]{9}/'],
            'email' => ['required', 'max:255', 'email', 'unique:doctors,email'],
            'category_id'=>'required|numeric',
            'password' => 'required|confirmed|min:6',


        ];
    }

  
    public function authorize()
    {
        return true;
    }
}
