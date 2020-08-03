<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\products;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class Adminrefullcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(Request $request)
    {
        $category = Category::all();
        $pt = products::with('category:id,c_name');
        if (isset($request->name)) {

            $pt = products::where('pro_name', 'like', '%' . $request->name . '%');
        }
        if (isset($request->category)) {
            $pt = $pt->where('pro_category_id', '=', $request->category);
        }
        $pt = $pt->paginate(10);
        return view('admin::products.exam', compact('pt', 'category'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin::products.create', ['category' => $category]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->insertorupdate($request);
        $request->session()->flash('sucesss', "thêm thành công");
        return redirect()->route('admin.get.list.products');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function insertorupdate(Requestproducts $request, $id = '')
    {
        $code = 0;
        try {
            $products = new products();
            if ($id) {
                $products = products::find($id);
            }
            $products->pro_name = $request->pro_name;
            $products->pro_slug = Str::slug($request->pro_name);
            $products->pro_category_id = $request->pro_category_id;
            $products->pro_price = $request->pro_price;
            if ($request->pro_sale)
                $products->pro_sale = $request->pro_sale;
            $products->pro_hot = isset($request->hot) ? 1 : 0;
            $products->pro_title_seo = $request->pro_title_seo ? $request->pro_title_seo : $request->pro_name;
            $products->pro_description_seo = $request->pro_description_seo ? $request->pro_description_seo : Null;
            $products->pro_description = $request->pro_description;
            $products->pro_content = $request->pro_content;
            $products->pro_number = $request->pro_number;
            if ($request->hasFile('file')) {
                $file = upload_image('file');
                if (isset($file['name'])) {
                    $products->pro_avatar = $file['name'];
                }
            }

            $products->save();
        } catch (Extension $e) {
            $code = 1;
            Log::alert('loi' . $e->getMessage);
        }
        return $code;
    }
    public function show($id)
    {
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('admin::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}