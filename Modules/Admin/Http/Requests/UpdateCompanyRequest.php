<?php

namespace Modules\Admin\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|max:190|unique:companies,id,' . request()->id,
            'phone'=>'required|numeric|unique:users|regex:/(01)[0-9]{9}/|unique:companies,id,'. request()->id,
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
