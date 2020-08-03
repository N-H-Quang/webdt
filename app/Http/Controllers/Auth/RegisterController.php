<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function getRegister()
    {
          return view('auth.register');  
    }
    public function postRegister(Request $request)
    {
   
        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->password=bcrypt($request->password);
        if($user->save())
        {
            $email=$user->email;
            $code=bcrypt(md5(time().$user->email));
            $url=route('user.verify.acccount',['id'=>$user->id,'code'=>$code]);
            $user->code_active =$code;
            $user->time_active=Carbon::now();
            $user->save();
            $data=['route'=>$url];
        Mail::send('admin::email.emailverify', $data, function($message)use ($email){
        $message->to($email, 'Verify Account')->subject('Láy lại mật khẩu');
        });
            return redirect()->route('get.login')->with('sucesss','Đăng Ký thành công');
        }
        else
        {
            
            return redirect()->back()->with((['danger'=>'đăng ký thất bại']));
        }

    }
    public function verifyaccount(Request $request)
    {
        $code=$request->code;
        $id=$request->id;
        $checkuser=User::where(['code_active'=>$code,'id'=>$id])->first();
       
            if(!$checkuser)
            {
                return redirect('/')->withErrors(['errors'=>'Xin Lỗi đường dẩn không hợp lệ']);
            }
            $checkuser->active=2;
            $checkuser->save();
            return redirect()->route("get.login")->with('sucesss','Xác nhận thành công'); 
    
    }
}
