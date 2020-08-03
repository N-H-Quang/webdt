<?php

namespace App\Http\Requests;

use Darryldecode\Cart\Cart;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class cartrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(Request $request)
    {

            if($request->qty<=0)
            {
                return  redirect()->back()->withErrors(['errors'=>'vui long nhap lai so luong']);
            }
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
            //
        ];
    }
}
