<?php

namespace App\Http\Controllers;

use App\Models\products;
use App\Models\rating;
use Illuminate\Http\Request;

class Ratingcontroller extends Controller
{
    public function saveRating(Request $request,$id)
    {
            if($request->ajax())
            {
                rating::insert([
                    'ra_product_id'=>$id,
                    'ra_number'=>$request->number,
                    'ra_content'=>$request->r_content,
                    'ra_user_id'=>get_data_user('web'),
                    'created_at'=>$now=\Carbon\Carbon::now(),
                    'updated_at'=>$now=\Carbon\Carbon::now()
                    
                ]);
               $product=products::find($id);
               $product->pro_total_number+=$request->number;
               $product->pro_total_rating+=1;
               $product->save();
                 return response()->json(['code'=>'1']);
                }
    }
}
