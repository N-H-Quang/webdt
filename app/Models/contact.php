<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class contact extends Model
{
    protected $table='contacts';
    protected $guarded =['id'];
    protected $tt=[
        1=>[
        'name'=>'đã xữ lý',
        'class'=>'badge-primary '
        ],
        0=>[
            'name'=>'chưa xử lý',
            'class'=>'badge-success'
        ]
    ];
    public function gettt()
    {
        return Arr::get($this->tt,$this->c_status,' ');

    }
}
