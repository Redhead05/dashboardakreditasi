<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKota extends Model
{
    use HasFactory;

    protected $fields = [
        'id_kota',
        'id_provinsi',
        'nama',
        'slug',
    ];

    public function RefProvinsi(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefProvinsi::class, 'id_provinsi', 'id_provinsi');
    }

    public function HasilAkreditasi(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HasilAkreditasi::class, 'id_kabkota', 'id_kota');
    }
}
