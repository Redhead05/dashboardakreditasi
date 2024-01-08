<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefProvinsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_provinsi',
        'nama',
        'slug',
        'alamat',
        'ketua',
    ];

    public function RefKota(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RefKota::class, 'id_provinsi', 'id_provinsi');
    }

    public function HasilAkreditasi(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HasilAkreditasi::class, 'id_provinsi', 'id_provinsi');
    }
}
