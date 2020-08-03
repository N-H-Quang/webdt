<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminRatingController extends Controller
{
  public function index()
  {
    $rating=rating::with('User:id,name')->with('product:id,pro_name')->paginate(10);
    return view('admin::rating.index',['rating'=>$rating]);
  }
  public function delete( Request $request, $id)
  {
   $rdelete=rating::find($id);
   $rdelete->delete();
   return redirect()->route('admin.get.list.rating');
  }
}
