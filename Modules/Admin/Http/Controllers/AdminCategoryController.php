<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\requestcategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use App\Models\Category;
use Exception;
use Illuminate\Contracts\Session\Session;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $Category= Category::select('id','c_name','c_detail_seo','c_active','c_home')->paginate(10);
        return view('admin::category.exam',['pt'=>$Category]);
    }
    public function create()
    {
        return view('admin::category.create');
    }
    
    public function store(requestcategory $request )
    {
     $this->insertorupdate($request);
     $request->session()->flash('sucesss', "thêm mới thành công");
     return view('admin::category.create',['id'=>'1']);
    }
    public function edit($id)
    {
        $Category=Category::find($id);
        return view('admin::category.update',['item'=>$Category]);
    }
    public function update(requestcategory $request,$id)
    {
        $this->insertorupdate($request,$id);
        $request->session()->flash('sucesss', "cập nhật thành công");
   return  redirect()->route('admin.get.list.category');
    }
    public function insertorupdate(requestcategory $request,$id=' ')
    {
        $code=0;
        try
        {
        if($id==' ')
        {
            
     $Category=new Category();
        }
        else
        {
    $Category=Category::find($id);
        }
        $Category->c_name=$request->name;
     $Category->c_icon=$request->icon;
     $Category->c_detail_seo=$request->c_title_ceo ? $request->c_title_ceo:$request->name;
     $Category->c_description_seo=$request->c_description_ceo;
     $Category->c_slug=Str::slug($request->name) ;
     $Category->c_active = $request->hot  ? 1:0;
     $Category->save();
    
    }
    catch(Exception $e)
{
    $code =1;
    Log::error('[error]'.$e->getMessage());
}
return $code;   
}
public function action(Request $request,$action,$id)
{
    if($action)
    {
     $Category=Category::find($id);
        switch ($action)
        {
            case 'delete':
                {
                $Category->delete();
                $request->session()->flash('sucesss', "Xóa thành công");
                break;
            }
            case 'home':
                {
                    $Category->c_home==0 ? $Category->c_home=1:$Category->c_home=0;
                    $Category->save();
                break;
                }
                case 'active':
                    {
                        $Category->c_active==0 ? $Category->c_active=1:$Category->c_active=0;
                        $Category->save();
                    break;
                    }
        }
    }
    return redirect()->back();
}
}
