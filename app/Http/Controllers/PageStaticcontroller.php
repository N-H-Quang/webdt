<?php

namespace App\Http\Controllers;

use App\Models\PageStatic;
use Facade\FlareClient\View;
use Illuminate\Http\Request;

class PageStaticcontroller extends Frontendcontroller
{
    
    public function Aboutus()
    {
        $page=PageStatic::where('ps_type',PageStatic::TYPE_ABOUT)->first();
        return view('Static.aboutus',compact('page'));
    }
}
