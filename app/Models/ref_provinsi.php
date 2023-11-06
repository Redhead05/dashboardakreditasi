<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref_provinsi extends Model
{
    use HasFactory;

    protected $table = 'ref_provinsi';

    public function ref_tahun_akreditasi(){
        return $this->belongsTo(ref_tahun_akreditasi::class);
    }
    public function HasilAkreditasi(){
        return $this->hasMany(HasilAkreditasi::class);
    }
}
