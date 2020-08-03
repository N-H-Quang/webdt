<?php

namespace App\Http\Controllers;

use App\Http\Requests\contact_requesr;
use App\Models\contact;
use Carbon\Carbon;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function getContact()
    {
        return view('contact');
    }
    public function postContact(contact_requesr $request)
    {
        contact::insert(
            [
                'c_name'=>$request->name,
                'c_email'=>$request->email,
                'c_title'=>$request->title,
                'c_content'=>$request->content,
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]
        );
        return redirect()->back();
        // $data=$request->except('_token');
        //$data['created_at']=$data['updated_at']=Carbon::now()
        // contact::insert($data);

    }
}
