<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class contact_requesr extends FormRequest
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
            'name'=>'required|min:8',
            'email'=>'required',
            'title'=>'required|min:10',
            'content'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'title.required' => 'Vui lòng nhập tiêu đề!',
            'name.required' => 'Vui lòng nhập tên',
            'conent.required' => 'Vui lòng nhập nội dung',
            'name.min' => 'Vui lòng nhập tên >8 ký tự',
            'title.min'=>'vui lòng nhập tiêu đề dài hơn',
            'content.required'=>'vui lòng nhập nội dung'
            
        ];
    }
}
