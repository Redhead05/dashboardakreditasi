<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefTahunAkreditasi extends Model
{
    use HasFactory;

    protected $table = 'ref_tahun_akreditasis';
    protected $primaryKey = 'id_tahun_akreditasi';

   public function RefProvinsi(){
        return $this->hasMany(RefProvinsi::class, 'id_tahun_akreditasi', 'id');
    }
}