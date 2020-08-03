<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\contact;
use App\Models\rating;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $rating=rating::with('User:id,name')->with('product:id,pro_name')->limit(10)->get();
        $contact=contact::limit(10)->get();
        //doanh thu ngay
        $moneyday=Transaction::whereDate('updated_at',date('y-m-d'))->where('tr_status',1)->sum('tr_total');
        $moneymonth=Transaction::whereMonth('updated_at',date('m'))->where('tr_status',1)->sum('tr_total');
        $transaction=Transaction::with('User:id,name')->limit(5)->orderBy('id','DESC')->get();
        $datamoney=[[
            "name"=> "Danh thu ngày",
             "y"=>(int) $moneyday
        ],
        [
            "name"=> "Danh thu tháng",
            "y"=>(int) $moneymonth
        ]
    ];
        $viewData=[
            'rating'=>$rating,
            'contact'=>$contact,
            'datamoney'=>json_encode($datamoney),
            'transaction'=>$transaction
        ];
        return view('admin::index',$viewData);
    }
}
