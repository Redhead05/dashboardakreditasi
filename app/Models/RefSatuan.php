<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefSatuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'satuan',
        'keterangan',
    ];

    public function HasilAkreditasi(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(HasilAkreditasi::class, 'id', 'satuan');
    }
}
