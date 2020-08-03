<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class products extends Model
{
    protected $table='products';
    protected $guarded =['id'];
    const Status_active=1;
    const Status_private=0;
    const HOT_ON=1;
    const HOT_OFF=0;
    public function category()
    {
        return $this->belongsTo('App\Models\Category','pro_category_id','id');
    }
    protected $status=[
        0=>[
        'name'=>'private',
        'class'=>'badge-danger '
        ],
        1=>[
            'name'=>'public',
            'class'=>'badge-success'
        ]
    ];
    protected $hot=[
        1=>[
        'name'=>'Nổi Bật',
        'class'=>'badge-primary '
        ],
        0=>[
            'name'=>'Không nổi bật',
            'class'=>'badge-success'
        ]
    ];
    public function getstatus()
    {
        return Arr::get($this->status,$this->pro_active,' ');
    }
    public function gethot()
    {
        return Arr::get($this->hot,$this->pro_hot,'nomal');
    }

}