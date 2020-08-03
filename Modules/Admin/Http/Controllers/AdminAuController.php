<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class AdminAuController extends Controller
{
    public function getlogin()
    {
        return view('admin::auth.login');
    }
    public function postlogin(Request $request)
    {
        $remember = false;
        if (isset($request->remember))
            $remember = true;
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admins')->attempt($credentials, $remember)) {
            return redirect()->route('tc');
        }
        return redirect()->back();
    }
    public function looutadmin()
    {
        Auth::guard('admins')->logout();
        return redirect()->route('admin_login');
    }
}