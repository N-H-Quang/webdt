<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\Category;
use Illuminate\Http\Request;

class Categorycolltroller extends Frontendcontroller
{
    public function getlistproduct(Request $request)
    {
       $url=preg_split('/(-)/',$request->segment(2));
       //array_pop ham de cat phan tu cuoi cung cua mang
        if($id=array_pop($url))
        {
            $product=products::where([
                'pro_active'=>products::Status_active,
                'pro_category_id'=>$id
            ]);
            if($request->price)
            {
                $price=$request->price;
                switch($price)
                {
                case 1:
                        {
                          $product=  $product->where('pro_price','<=',1000000);
                        break;
                        }
                case 2:
                        {
                          $product=  $product->whereBetween('pro_price',[1000000,3000000]);
                        break;
                        }
                case 3:
                        {
                          $product=  $product->whereBetween('pro_price',[3000000,5000000]);
                        break;
                        }
                case 4:
                        {
                          $product=  $product->whereBetween('pro_price',[5000000,7000000]);
                        break;
                        }
                case 5:
                        {
                          $product=  $product->where('pro_price',[7000000,1000000]);
                        break;
                        }
                case 6:
                        {
                          $product=  $product->where('pro_price','>=',10000000);
                        break;
                        }
                        
                }
            }
            if($request->orderby)
            {
              $orderby=$request->orderby;
              switch ($orderby)
              {
                case 'desc':
                  $product=$product->orderBy('id','DESC')->paginate(9);
                break;
                case 'asc':
                  $product=$product->orderBy('id','ASC')->paginate(9);
                break;
                case 'price_max':
                  $product=$product->orderBy('pro_price','ASC')->paginate(9);
                break;
                case 'price_min':
                  $product=$product->orderBy('pro_price','DESC')->paginate(9);
                break;

              }
            }
            else
            $product=$product->orderBy('id','DESC')->paginate(9);
            $cateproduct=Category::find($id);
            return view('product.index',['product'=>$product,'cateproduct'=>$cateproduct,'query'=>$request->query()]);
        }
        if($request->k)
            {
              $product=products::where([
                'pro_active'=>products::Status_active,
                
            ])->where('pro_name','like','%'.$request->k.'%'); 
            $product=$product->orderBy('id','DESC')->paginate(3);
            return view('product.index',['product'=>$product,'query'=>$request->query()]);
            }
        return redirect('/');
    }  
}
