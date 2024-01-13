<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefDesa extends Model
{
    use HasFactory;

    protected $table = 'ref_desas';

    public function RefKecamatan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\RefKecamatan', 'id_kecamatan', 'id_kecamatan');
    }
}
