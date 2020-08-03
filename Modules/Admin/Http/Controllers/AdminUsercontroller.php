<?php

namespace Modules\Admin\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminUsercontroller extends Controller
{
    public function index(Request $request)
    {
        $user=User::whereRaw(1);
         $user=$user->orderBy('id','DESC')->paginate(5);
         $viewData=[
             'users'=>$user
         ];
        return view('admin::user.index',$viewData);
    }
}
