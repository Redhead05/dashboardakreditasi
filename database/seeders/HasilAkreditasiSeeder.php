<?php

namespace Database\Seeders;

use App\Models\HasilAkreditasi;
use App\Models\RefDesa;
use App\Models\RefKecamatan;
use App\Models\RefKota;
use App\Models\RefProvinsi;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HasilAkreditasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 50; $i++) {
            $provinsi = RefProvinsi::all()->shuffle()->first();
            $kota = RefKota::all()->shuffle()->first();
            $kecamatan = RefKecamatan::all()->shuffle()->first();
            $desa = RefDesa::all()->shuffle()->first();

            HasilAkreditasi::create([
                'npsn' => Str::random(10),
                'nama_lembaga' => Str::random(10),
                'satuan' => Str::random(6),
                'program' => Str::random(10),
                'alamat' => Str::random(10),
                'id_desa' => $desa->id_desa,
                'kel_desa' => Str::random(10),
                'id_kecamatan' => $kecamatan->id_kecamatan,
                'kecamatan' => Str::random(10),
                'id_kota' => $kota->id_kota,
                'kabkota' => Str::random(10),
                'id_provinsi' => $provinsi->id_provinsi,
                'provinsi' => Str::random(10),
                'tahun_akreditasi' => rand(2000, 2022),
                'tanggal_sk' => substr(now(), 0, 16),
                'no_sk' => Str::random(10),
                'total_nilai' => rand(1, 100),
                'status' => Str::random(10),
                'no_sertifikat' => Str::random(10),
                'path_sertifikat' => Str::random(10),
                'download_count' => rand(1, 100),
                'keterangan' => Str::random(10),
            ]);
        }
    }
}
