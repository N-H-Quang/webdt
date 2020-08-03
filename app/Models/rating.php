<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table='ratings';
    protected $guarded =['id'];
    public function User()
    {
        return $this->belongsTo(User::class,'ra_user_id','id');
    }
    public function product()
    {
        return $this->belongsTo(products::class,'ra_product_id','id');
    }
}
