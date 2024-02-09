<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKota extends Model
{
    use HasFactory;


    protected $table = 'ref_kotas';


    public function RefProvinsi(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefProvinsi::class, 'id_provinsi', 'id_provinsi');
    }
    public function RefKecamatan(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany(RefKecamatan::class, 'id_kota', 'id_kota');
    }

    public function HasilAkreditasi(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HasilAkreditasi::class, 'id_kabkota', 'id_kota');
    }
}
