<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
class article extends Model
{
    protected $table='article';
    protected $guarded =['id'];
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
        protected $home=[
            0=>[
                'name'=>'None',
                'class'=>'badge-danger '
                ],
                1=>[
                    'name'=>'Hot',
                    'class'=>'badge-success'
                ]
            ];
    public function getStatus()
    {
        return Arr::get($this->status,$this->a_active,' ');
    }
    public function gethome()
    {
        return Arr::get($this->home,$this->a_hot,' ');
    }
}
