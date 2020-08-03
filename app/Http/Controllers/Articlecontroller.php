<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\Request;

class Articlecontroller extends Frontendcontroller
{

    public function getlistarticle()
    {
        $aticle = article::simplePaginate(5);
        $aticlehot=article::where('a_hot',1)->limit(5)->get();
        return view('aticle.index',compact('aticle','aticlehot'));
    }
    public function getdetailarticle(Request $request)
    {
       
        $url=preg_split('/(-)/',$request->segment(2));
        if($id=array_pop($url))
        {
            $aticle = article::paginate(10);
            $aticledetail=article::find($id);
            $aticlehot=article::where('a_hot',1)->limit(5)->get();
            return view('aticle.detail',compact('aticle','aticledetail','aticlehot'));
        }
        else
        {
            return redirect('/');
        }
        
    }
}
