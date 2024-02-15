<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefTahun extends Model
{
    use HasFactory;

    protected $table = 'ref_tahuns';

    public function capaianSasarans(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(CapaianSasaran::class, 'ref_tahun_id', 'id');
    }

    public function dataTahunBerjalans(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(DataTahunBerjalan::class, 'ref_tahun_id', 'id');
    }
}
