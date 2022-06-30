<?php

namespace Modules\Front\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:190',
            'email'=>'required|email|unique:patients',
            'phone'=>'numeric|required|regex:/(01)[0-9]{9}/',
            'image'=>'required|image|mimes:png,jpg',
            'password'=>'required|confirmed|min:6|max:25',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
