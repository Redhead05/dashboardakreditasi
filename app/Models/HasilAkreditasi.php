<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HasilAkreditasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'npsn',
        'nama_lembaga',
        'satuan',
        'program',
        'alamat',
        'id_kel_desa',
        'kel_desa',
        'id_kecamatan',
        'kecamatan',
        'id_kabkota',
        'kabkota',
        'id_provinsi',
        'provinsi',
        'tahun_akreditasi',
        'tanggal_sk',
        'no_sk',
        'total_nilai',
        'status',
        'no_sertifikat',
        'path_sertifikat',
        'download_count',
        'keterangan',
    ];

    public function RefSatuan(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefSatuan::class, 'id', 'id');
    }

    public function RefProvinsi(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefProvinsi::class, 'id_provinsi', 'id_provinsi');
    }

    public function RefKota(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(RefKota::class, 'id_kabkota', 'id_kota');
    }
    public function RefKecamatan(): BelongsTo
    {
        return $this->belongsTo(RefKecamatan::class, 'id_kecamatan', 'id_kecamatan');
    }
}
