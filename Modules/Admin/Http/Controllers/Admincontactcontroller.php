<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class Admincontactcontroller extends Controller
{
 public function index()
 {
     $listcontact=contact::all();
          return view('admin::contact.index',['contact'=>$listcontact]);
 }
}
