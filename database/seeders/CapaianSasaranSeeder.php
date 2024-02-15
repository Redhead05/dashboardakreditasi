<?php

namespace Database\Seeders;

use App\Models\CapaianSasaran;
use App\Models\RefTahun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CapaianSasaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get a random RefTahun id
        $refTahunId = RefTahun::inRandomOrder()->first()->id;

        // Create CapaianSasaran instances
        for ($i = 0; $i < 10; $i++) {
            $capaianSasaran = new CapaianSasaran;
            $capaianSasaran->ref_tahun_id = $refTahunId;
            $capaianSasaran->total_sasaran = rand(10000, 99999);
            $capaianSasaran->akreditasi_baru = rand(10000, 99999);
            $capaianSasaran->Reakreditasi = rand(10000, 99999);
            $capaianSasaran->save();
        }
    }
}
