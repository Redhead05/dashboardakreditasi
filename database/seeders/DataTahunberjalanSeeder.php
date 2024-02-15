<?php

namespace Database\Seeders;

use App\Models\DataTahunBerjalan;
use App\Models\RefTahun;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataTahunberjalanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Fetch the RefTahun records
        $refTahuns = RefTahun::all();

        // For each RefTahun record, create a DataTahunBerjalan record
        foreach ($refTahuns as $refTahun) {
            $dataTahunBerjalan = new DataTahunBerjalan;
            $dataTahunBerjalan->ref_tahun_id = $refTahun->id;
            $dataTahunBerjalan->sasaran = rand(10000, 99999);
            $dataTahunBerjalan->kadaluarsa = rand(10000, 99999);
            $dataTahunBerjalan->potensi = rand(10000, 99999);
            $dataTahunBerjalan->save();
        }
    }
}
