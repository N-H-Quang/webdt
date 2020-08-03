<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table='transactions';
    protected $guarded =['id'];
    const STATUS_DONE=1;
    const STATUS_DEFAULT=0;
    public function User()
    {
        return $this->belongsTo('App\User','tr_user_id','id');
    }
}
