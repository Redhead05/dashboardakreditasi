<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HasilAkreditasi extends Model
{
    use HasFactory;

    protected $table = 'hasil_akreditasi';

    public function ref_provinsi(){
        return $this->belongsTo(ref_tahun_akreditasi::class);
    }

}
