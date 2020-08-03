<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\PageStatic;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminpagestaticController extends Controller
{
    public function index()
    {
        $page=PageStatic::all();
        return view('admin::page_static.exam',compact('page'));     
    }
    public function create()
    {
        return view('admin::page_static.create');     
    }
    public function store(Request $request)
    {
       $this->createorUpdate($request);
       return redirect()->back();
    }
    public function edit($id)
    {
        $page=PageStatic::find($id);
        return view("admin::page_static.update",['items'=>$page]);
    }
    public function update(Request $request,$id)
    {
        $this->createorUpdate($request,$id);
        return redirect()->back();
    }
    public function createorUpdate(Request $request,$id=0)
    {
        $page=new PageStatic();
        if($id!=0)
        {
            $page=PageStatic::find($id);
        }
        $page->ps_name=$request->ps_name;
        $page->ps_type=$request->type;
        $page->ps_content=$request->ps_content;
        $page->save();

    }
}
