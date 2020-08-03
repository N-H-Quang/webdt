<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productsdetailcontroller extends Frontendcontroller
{
    public function productdetail(Request $request)
    {
     
        $url=preg_split('/(-)/',$request->segment(2));
        if($id=array_pop($url))
        {
            $rating=rating::with('User:id,name')->where('ra_product_id',$id)->orderBy('id','DESC')->paginate(10);
            $productDetail=products::where('id',$id)->get();
            $ratingDashboard=rating::select(DB::raw('count(ra_number) as total'),DB::raw('sum(ra_number) as sum'))->addSelect('ra_number')->groupBy('ra_number')->where('ra_product_id',$id)->get()->toArray();
            $arrayRating=[];
            if(!empty($ratingDashboard))
            {
                for( $i=1;$i<=5;$i++)
                {
                    $arrayRating[$i]=[
                        "total" => 0,
                        "sum" => 0,
                        "ra_number" => $i
                    ];
                    foreach($ratingDashboard as $item)
                    {
                        if($item['ra_number']==$i)
                        {
                            $arrayRating[$i]=$item;
                            continue;   
                        }
                    }
                }
            }
            
            return view('product.detail',['item'=>$productDetail,'rating'=>$rating,'arrayRating'=>$arrayRating]);
            
        }
        return redirect('/');
    }
    public function __construct()
    {
        parent::__construct();
    }
   
}
