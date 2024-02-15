<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataTahunBerjalan extends Model
{
    use HasFactory;

    protected $table = 'data_tahun_berjalans';

    public function refTahun(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefTahun::class, 'ref_tahun_id', 'id');
    }
}
