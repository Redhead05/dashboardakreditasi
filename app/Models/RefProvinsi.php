<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProvinsi extends Model
{
    use HasFactory;

    protected $table = 'Ref_Provinsi';
    protected $primaryKey = 'id_provinsi';

    public function RefTahunAkreditasi(){
        return $this->belongsTo(RefTahunAkreditasi::class, 'id_tahun_akreditasi', 'id_tahun_akreditasi');
    }
    
    public function HasilAkreditasi(){
        return $this->hasMany(HasilAkreditasi::class);
    }
}
