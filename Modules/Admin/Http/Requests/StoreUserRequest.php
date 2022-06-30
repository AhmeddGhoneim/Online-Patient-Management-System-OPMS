<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'UserName'=>'required|max:190',
            'company_id'=>'required|array',
            'phone'=>'required|numeric|unique:users|regex:/(01)[0-9]{9}/',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed|max:25|min:6',
            'allow_files'=>'required|in:1,0',
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
