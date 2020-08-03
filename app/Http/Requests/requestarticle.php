<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestarticle extends FormRequest
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
            'a_name'=>'required|unique:article,a_name,'.$this->a_name,
            'a_description'=>'required',
            'a_content'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'a_name.required'=>'tên không được để trống',
            'a_name.unique'=>'tên  đã tồn tại',
            'a_description'=>'lưu ý không được để trống',
            'a_content'=>'lưu ý không được để trống',
        ];
    }
}
