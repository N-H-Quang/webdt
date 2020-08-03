<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class requestresetpassword extends FormRequest
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
            'newpassword'=>'required|same:newpassword2|min:8',
            'newpassword2'=>'required|min:10',
            ];
    }
    public function messages()
    {
        return [
            'newpassword.required' => 'Vui lòng nhập  password mới!',
            'newpassword2.required' => 'Vui lòng nhập lại password ',
            'newpassword.min'=>'Vui lòng nhập password >8 ký tự',
            'newpassword2.min'=>'Vui lòng nhập password >8 ký tự',
            'newpassword.same'=>'mật khẩu mới không trùng với nhạp lại'
        ];
    }
}
