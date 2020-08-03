<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Order;
use App\Models\products;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminTransactioncontroller extends Controller
{
    public function index()
    {$transaction=Transaction::with('User:id,name')->paginate(10);
       $viewData=[
        'transaction'=>$transaction
       ];
        return view('admin::transaction.index',$viewData);
    }
    public function viewOder(Request $request,$id)
    {
        if($request->ajax())
        {      
            $orders=Order::with('products:id,pro_name,pro_avatar,pro_slug')->where('or_transaction_id',$id)->get();
            $html= view('admin::components.order',compact('orders'))->render();
            return response()->json($html);
        }
    
    }
    /*
    xử lý trạng thái đơn hàng
     */
    public function ActionTransaction($id)
    {
        $transaction=Transaction::find($id);
       $Order=Order::where('or_transaction_id',$id)->get();
       if(isset($Order))
       {
        foreach ($Order as $item) {
        $product=products::find($item->or_product_id);
        $product->pro_number=$product->pro_number-$item->or_qty;
        $product->pro_pay+=1;
        $product->save();
        }
       }
       DB::table('users')->where('id',$transaction->tr_user_id)->increment('total_pay');
       $transaction->tr_status=Transaction::STATUS_DONE;
       $transaction->save();
       return redirect()->back()->with('success','Xử lý thành công');
    }
}
