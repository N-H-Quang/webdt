<?php

namespace App\Http\Controllers;
use App\Models\article;
use App\Models\products;
use App\Models\Category;
use App\Models\Order;
use App\Models\Transaction;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;

class HomeController extends Frontendcontroller
{ public function index()
    {
        $Category=Category::with("products")->where('c_home',1)->limit(3)->get();
        $producthot=products::where([
            'pro_active'=>1
        ])->orderBy('id','DESC')->limit(10)->get();
        $article=article::get();
        //kiem tra nguoi dung dang nhap 
        $productSuggest=[];
        if(get_data_user('web'))
        {
            $transaction=Transaction::where(["tr_user_id"=>get_data_user('web'),"tr_status"=>1])->pluck('id');
            //value: dung de lay cot va du lieu dau tien ,pluck: lay mang 1 cot
           if(!empty($transaction))
           {
               $listId=Order::whereIn('or_transaction_id',$transaction)->distinct()->pluck('or_product_id');
               if(!empty($listId))
               {
              $listIdcategory=products::whereIn('id',$listId)->distinct()->pluck("pro_category_id");
              if($listIdcategory)
              {
                   $productSuggest=products::whereIn("pro_category_id",$listIdcategory)->limit(6)->get();
              }
               }
              
           }
        }
        //khong thi thoi
        return view('home.index',['producthot'=>$producthot,'article'=>$article,'Category'=>$Category,'productSuggest'=>$productSuggest]);
    }  
    public function __construct()
    {
        parent::__construct();
    }
    public function renderproductview(Request $request)
    {
        if($request->ajax())
        {
            $listId=$request->id;
            $productview=products::whereIn('id',$listId)->get();
            $html=view('admin::components.productviewed',['productview'=>$productview])->render();
            return response()->json(['data'=>$html]);
        }
    }
}
