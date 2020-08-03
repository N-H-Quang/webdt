<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestcategory extends FormRequest
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
            'name'=>'required|unique:catrgories,c_name,'.$this->name,
            'icon'=>'required'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'trường này không được để trống',
            'name.unique'=>'tên danh mục đã tồn tại',
            'icon.required'=>'trường này không được để trống'
        ];
    }
}
