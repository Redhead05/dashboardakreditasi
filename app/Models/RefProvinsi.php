<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RefProvinsi extends Model
{
    use HasFactory;

    protected $table = 'ref_provinsis';
//    protected $fillable = [
//        'id_provinsi',
//        'nama',
//        'slug',
//        'alamat',
//        'ketua',
//    ];

    public function RefKota(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RefKota::class, 'id_provinsi', 'id_provinsi');
    }

    public function HasilAkreditasi(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HasilAkreditasi::class, 'id_provinsi', 'id_provinsi');
    }
}
