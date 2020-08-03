<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\products;
use App\Models\Transaction;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class shoppingcartcontrooler extends Controller
{
    public function addproduct(Request $request,$id)
    {
        $product=products::select('pro_name','id','pro_price','pro_sale','pro_avatar','pro_number')->find($id);
        if(!isset($product))
        return redirect('/');
        else
        {
            $price=$product->pro_price;
            if($product->pro_sale!=0)
            {
                $price=$product->pro_price*(100-$product->sale)/100;
            }
            if($product->pro_number==0)

            {
                return redirect()->back()->withErrors(['errors'=>'San pham het hang']);
            }
            Cart::add(['id'=>$id,'name'=>$product->pro_name,
            'qty'=>1,'price'=>$price,
            'options'=>['avatar'=>$product->pro_avatar,
            'sale'=>$product->pro_sale,
            'price_old'=>$product->pro_price
        ],]);
        return redirect()->back()->with('sucesss','Thêm vào giỏ hàng thành công');
        }
    }
    public function getlist()
    {
        $cart=Cart::content();
        return view('shopping.index',compact('cart'));

    }
    public function getFormpay()
    {
        $cart=Cart::content();
        return view('shopping.pay',compact('cart'));
    }
    public function deleteproduct($key)
    {
        Cart::remove($key);
        return redirect()->back();
    }
    //luu thong tin gio hang
    public function saveInfoshoppingcart(Request $request)
    {
       $totalMoney=str_replace(',','',Cart::subtotal(0,3));
       $TSid = Transaction::insertGetId([
        'tr_user_id'=>get_data_user('web'),
        'tr_total'=>(int)$totalMoney,
        'tr_note'=>$request->note,
        'tr_address'=>$request->address,
        'tr_phone'=>$request->phone_number,
        'created_at'=>$now=\Carbon\Carbon::now(),
        'updated_at'=>$now=\Carbon\Carbon::now()
       ]);
       $product=Cart::content();
       foreach($product as $item)
       {
           Order::insert([
            'or_transaction_id'=>$TSid,
            'or_product_id' =>  $item->id,
            'or_qty'=>$item->qty,
            'or_price'=>$item->options->price_old,
            'or_sale'=>$item->options->sale,
            'created_at'=>$now=\Carbon\Carbon::now(),
        'updated_at'=>$now=\Carbon\Carbon::now()
              ]);

       }
       Cart::destroy();
       return redirect()->route("home");
       }
}
