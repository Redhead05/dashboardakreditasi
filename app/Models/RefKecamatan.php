<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKecamatan extends Model
{
    use HasFactory;

    protected $table = 'ref_kecamatans';

    public function RefKota(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefKota::class, 'id_kota', 'id_kota');
    }

    public function RefDesa():\illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->HasMany('App\Models\RefDesa', 'id_kecamatan', 'id_kecamatan');
    }
}
