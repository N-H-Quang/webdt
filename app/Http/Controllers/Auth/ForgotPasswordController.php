<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\requestresetpassword;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    
   public function getformreset()
   {
       return view ('auth.passwords.email');
   }
   public function sentcodereset(Request $request)
   {
   $email=$request->email;
   
   $checkuser=User::where('email',$email)->first();
   if($checkuser)
   {
    $code=bcrypt(md5(time().$email));
    $checkuser->code=$code;
    $checkuser->time_code=Carbon::now();
    $checkuser->save();
    $url=route("reset-password",['code'=>$checkuser->code,'email'=>$checkuser->email]);
    $data=['route'=>$url];
    Mail::send('admin::email.email', $data, function($message)use ($checkuser){
        $message->to( $checkuser->email, $checkuser->name)->subject('Láy lại mật khẩu');
    });
    Return redirect()->back()->with(['sucesss'=>'vui lòng truy cập email để láy code']);
   }
   else
   {
       Return redirect()->back()->withErrors(['errors'=>'Email Không tồn tại']);
      
   }
   }
   public function resetpassword(Request $request)
    {
       
        $code=$request->code;
        $email=$request->email;
        $checkuser=User::where(['code'=>$code,'email'=>$email])->first();
        if(!$checkuser)
        {
            return redirect('/')->withErrors(['errors'=>'Xin Lỗi đường dẩn không hợp lệ']);
        }
        return view('auth.passwords.reset');
    } 

public function saveresetpassword(requestresetpassword $request)
{
if($request->newpassword)
{
    $code=$request->code;
    $email=$request->email;
    $checkuser=User::where(['code'=>$code,'email'=>$email])->first();
        if(!$checkuser)
        {
            return redirect('/')->withErrors(['errors'=>'Xin Lỗi đường dẩn không hợp lệ']);
        }
        $checkuser->password=bcrypt($request->newpassword);
        $checkuser->save();
        return redirect()->route("get.login")->with('success','Mật khẩu được đổi thành công'); 

}
else
{
    return redirect('/')->withErrors(['errors'=>'Xin Lỗi đường dẩn không hợp lệ']);  
}
}
}