<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\Requestproducts;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\products;
use PharIo\Manifest\Extension;
use phpDocumentor\Reflection\Types\Null_;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminproductController extends Controller
{
    public function index(Request $request)
    {
        $category=Category::all();
        $pt=products::with('category:id,c_name');
        if(isset($request->name))
        {
           
            $pt=products::where('pro_name','like','%'.$request->name.'%');
        }
        if(isset($request->category))
        {
            $pt=$pt->where('pro_category_id','=',$request->category);   
        }
        $pt=$pt->paginate(10);
        return view('admin::products.exam',compact('pt','category'));
    }
    public function create()
    {
        $category=Category::all();
        return view('admin::products.create',['category'=>$category]);
    }
    public function store(Requestproducts $request)
    {

       $this->insertorupdate($request);
       $request->session()->flash('sucesss', "thêm thành công");
       return redirect()->route('admin.get.list.products');
    }
    public function insertorupdate(Requestproducts $request,$id='')
    { $code=0;
        try
{
        $products=new products();
        if($id)
        {
            $products=products::find($id);
        }
        $products->pro_name=$request->pro_name;
        $products->pro_slug=Str::slug($request->pro_name);
        $products->pro_category_id=$request->pro_category_id;
        $products->pro_price=$request->pro_price;
        if($request->pro_sale)
        $products->pro_sale=$request->pro_sale;
        $products->pro_hot=isset($request->hot) ? 1:0;
        $products->pro_title_seo= $request->pro_title_seo ? $request->pro_title_seo :$request->pro_name;
        $products->pro_description_seo=$request->pro_description_seo ? $request->pro_description_seo: Null;
        $products->pro_description=$request->pro_description;
        $products->pro_content=$request->pro_content;
        $products->pro_number=$request->pro_number;
        if($request->hasFile('file'))
        {
            $file=upload_image('file');
            if(isset($file['name']))
            {
                $products->pro_avatar=$file['name'];
            }
        }
   
        $products->save();
    }
    catch(Extension $e)
    {
        $code=1;
        Log::alert('loi'.$e->getMessage);
    }
    return $code;

    }
    public function edit(Request $request,$id)
    {
     $products=products::find($id);
     $category=Category::all();
     $request->session()->flash('sucesss', "Cập nhật thành công");
     return view('admin::products.update',['items'=>$products,'category'=>$category]);
    }
    public function update(Requestproducts $request,$id)
    {
        // dd($request->all());
        $this->insertorupdate($request,$id);

        return redirect()->route('admin.get.list.products');
    }
    public function action(Request $request,$action,$id)
{
    if($action)
    {
     $products=products::find($id);
        switch ($action)
        {
            case 'delete':
                {
                $products->delete();
                break;
                }
            case 'active':
                {
                    
                    $products->pro_active= $products->pro_active ==1 ? 0:1 ;
                $products->save();
                break;
                }
            case 'hot':
                {
                    $products->pro_hot= $products->pro_hot ==1 ? 0:1 ;
                $products->save();
                break;
                }
        }
    }
    return redirect()->back();
}

}
