<?php

namespace Modules\Admin\Http\Controllers;

use App\Http\Requests\requestarticle;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Models\article;
use Illuminate\Support\Str;
class AdminarticleController extends Controller
{
    public function index(Request $request)
    {
        $article=article::select('*');
        if(isset($request->name))
        {
            $article=article::where('a_name','like','%'.$request->name.'%');
        }
        $article=$article->paginate(5);
        return view('admin::article.exam',['article'=>$article]);
    }
    public function create()
    {
        return view ('admin::article.create');
    }
    public function store(requestarticle $request)
    {
        $this->insertorupdate ($request);
        return redirect()->back();
    }
    public function edit ($id)
    {
        $article=article::find($id);
        return view('admin::article.update',['items'=>$article]);
        

    }
    public function update(requestarticle $request,$id)
    {
        $this->insertorupdate($request,$id);
        return redirect()->back();
    }
    public function insertorupdate(requestarticle $request, $id='')
    {
        $article=new article();
        if($id!='')
        {
            $article=article::find($id);
        }
        $article->a_name=$request->a_name;
        $article->a_description=$request->a_description;
        $article->a_slug=Str::slug($request->a_name);
        $article->a_content=$request->a_content;
        $article->a_title_seo=$request->a_title_seo ? $request->a_title_seo:$request->a_name;
        $article->a_description=$request->a_description;
        $article->a_description_seo=$request->a_description_seo;
      
        if($request->hasFile('file'))
        {
            $file=upload_image('file');
           
            
            if(isset($file['name']))
            {
                $article->a_avatar=$file['name'];
            }
        }
        $article->save();
    }
    public function action(Request $request,$action,$id)
{
    if($action)
    {
     $Category=article::find($id);
        switch ($action)
        {
            case 'delete':
                {
                $Category->delete();
                break;}
                case 'active':
                    {
                        
                        $Category->a_active= $Category->a_active ==1 ? 0:1 ;
                    $Category->save();
                    break;
                    }
                    case 'hot':
                    {
                        
                        $Category->a_hot = $Category->a_hot ==1 ? 0:1 ;
                        $Category->save();
                        break;
                    }
        }
       
    }
    return redirect()->back();
}
}
