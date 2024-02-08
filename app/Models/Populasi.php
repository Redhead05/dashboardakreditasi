<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Populasi extends Model
{
    use HasFactory;

    protected $table ='populasis';

    public function getTotalPopulasiAttribute($value)
    {
        return number_format($value, 0,'','.');
    }


//    public function getTotalPopulasiAttribute($value)
//    {
//        return number_format($value, 0, ',', '.');
//
//    }
}
