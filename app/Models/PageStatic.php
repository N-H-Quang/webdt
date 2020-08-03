<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PageStatic extends Model
{
    protected $guarded =['id'];
    const TYPE_ABOUT=1;
    const TYPE_INFO_SHOPPING=1;
    const TYPE_BAOMAT=3;
    const TYPE_DIEUKHOAN=4;
    protected $table='page_statics';
}
