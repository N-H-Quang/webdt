<?php

namespace App\Http\Controllers;

use App\Http\Requests\NameRequest;
use App\Models\products;
use App\Models\Transaction;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usercontroller extends Controller
{
    public function index()
    {
        $String=Transaction::where("tr_user_id",get_data_user('web'));
        $transaction=$String->paginate(10);
        $totaltransaction=$String->select('id')->count();
        $pocceedtransaction=$String->where('tr_status',Transaction::STATUS_DONE)->select('id')->count();
        return view('user.index',compact('totaltransaction','pocceedtransaction','transaction'));
    }
    public function updateInfor()
    {
        $user=User::find(get_data_user('web'));
        return view('user.infor',compact('user'));
    }
    //luu thong tin
    public function saveupload(Request $request)
    {
        $user=User::where('id',get_data_user('web'))->update($request->except("_token"));
        $request->session()->flash('sucesss', "Cập nhật thành công");
        return redirect()->back();
    }
    public function updatepassword(Request $request)
    {
        return view('user.password');
    }
    public function saveupdatepassword(NameRequest $request)
    {
     if(Hash::check($request->password,get_data_user('web','password')))
     {
        $user=User::find(get_data_user('web'));
        $user->password=bcrypt($request->newpassword);
        $user->save();
        $request->session()->flash('sucesss', "Cập nhật thành công");
        return redirect()->back();

     }
     else
     {
         return redirect()->back()->withErrors(['password'=>'Mật khẩu củ không đúng']);
     }
    }
    public function getProductpay()
    {
        $product =products::orderBy('pro_pay','DESC')->limit(10)->get();
        return view('user.product',compact('product'));
    }
    public function getlistfocus()
    {
        return view("user.focus");
    }
    
}
