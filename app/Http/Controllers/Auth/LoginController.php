<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('web')->except('logout');
    }
    public function getLogin()
    {
        return view('auth.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');
                if (Auth::attempt($credentials)) {
            // Authentication passed...
            $this->middleware('web')->only('logout');
            return redirect()->route('home')->with('sucesss','đăng nhập thành công');
        }
        else
        {
            return redirect()->back()->with(['error'=>'Vui Lòng nhập lại','danger'=>'Đăng nhập thất bại']);
        }
    }
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
