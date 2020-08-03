<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\products;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminwarehouseController extends Controller
{
  public function getWarehouseProduct(Request $request)
  {
    $category=Category::all();
    $pt=products::with('category:id,c_name');
    $collum='id';
    if($request->type&&$request->type=='pay')
    {
        $collum='pro_pay';
    }
    else
    {
        $pt->where('pro_number','<=',5);
    }
    if(isset($request->name))
    {
       
        $pt=products::where('pro_name','like','%'.$request->name.'%');
    }
    if(isset($request->category))
    {
        $pt=$pt->where('pro_category_id','=',$request->category);   
    }
    $pt=$pt->orderByDesc($collum)->paginate(10);
    return view('admin::warehouse.index',compact('pt','category'));
  }
}
