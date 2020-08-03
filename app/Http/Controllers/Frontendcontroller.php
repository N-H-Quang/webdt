<?php
namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class  Frontendcontroller extends Controller
{
    public function __construct()
    {
        $category=Category::all();
        view()->share('category', $category);
    }
}
