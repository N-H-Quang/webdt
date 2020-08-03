<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class Requestproducts extends FormRequest
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
    public function rules(Request $request)
    {
        $url=$request->segment(3);
        if($url=='create')
        return [
            'pro_name'=>'required|unique:products,pro_name'.$this->name,
            'pro_category_id'=>'required',
            'pro_price'=>'required',
            'pro_description'=>'required',
            'pro_content'=>'required',
        ];
        else
        return [
            'pro_category_id'=>'required',
            'pro_price'=>'required',
            'pro_description'=>'required',
            'pro_content'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'pro_name.required'=>'nhập tên sản phẩm',
            'pro_name.unique'=>'tên sản phẩm đã tồn tại',
            'pro_category_id.required'=>'nhập tên danh mục',
            'pro_price.required'=>'nhập giá vào',
            'pro_description.required'=>'nhập mô tả vào',
            'pro_content.required'=>'nhập nội dung vào'
        ];
    }
}
