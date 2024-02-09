<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CapaianSasaran extends Model
{
    use HasFactory;

    protected $table = 'capaian_sasarans';

    public function refTahun(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefTahun::class, 'ref_tahun_id', 'id');
    }
}
