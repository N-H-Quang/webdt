<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Arr;

class Category extends Model
{
    protected $table='catrgories';
    protected $guarded =['id'];
    const Status_active=1;
    const Status_private=0;
    const HOME=1;
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
                'name'=>'private',
                'class'=>'btn-danger '
                ],
                1=>[
                    'name'=>'Hiển thị',
                    'class'=>'btn-primary'
                ]
            ];
    public function getStatus()
    {
        return Arr::get($this->status,$this->c_active,' ');
    }
    public function gethome()
    {
        return Arr::get($this->home,$this->c_home);
    }
    public function products()
    {
       return $this->hasMany(products::class,"pro_category_id");
    }
}
