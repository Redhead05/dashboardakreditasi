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
                'npsn' => random_int(10000000, 99999999),
                'nama_lembaga' => Str::random(10),
                'satuan' => ['PAUD', 'TK/KB', 'SD', 'SMP', 'SMA'][array_rand(['PAUD', 'TK/KB', 'SD', 'SMP', 'SMA'])],
                'program' => Str::random(10),
                'alamat' => Str::random(10),
                'id_desa' => $desa->id_desa,
                'kel_desa' => $desa->nama,
                'id_kecamatan' => $kecamatan->id_kecamatan,
                'kecamatan' => $kecamatan->nama,
                'id_kota' => $kota->id_kota,
                'kabkota' => $kota->nama,
                'id_provinsi' => $provinsi->id_provinsi,
                'provinsi' => $provinsi->nama,
                'tahun_akreditasi' => rand(2019, 2024),
                'tanggal_sk' => substr(now(), 0, 16),
                'no_sk' => Str::random(10),
                'total_nilai' => rand(1, 100),
                'status' => ['A', 'B', 'C', 'TT'][array_rand(['A', 'B', 'C', 'TT'])],
                'no_sertifikat' => Str::random(10),
                'path_sertifikat' => Str::random(10),
                'download_count' => rand(1, 100),
                'keterangan' => Str::random(10),
            ]);
        }
    }
}
