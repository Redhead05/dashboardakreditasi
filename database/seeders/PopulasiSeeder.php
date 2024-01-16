<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PopulasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tahun' => '2019',
                'total_populasi' => '1000000',
                'akreditasi' => '30000',
                'belum_akreditasi' => '3000',
            ],
            [
                'tahun' => '2020',
                'total_populasi' => '1200000',
                'akreditasi' => '40000',
                'belum_akreditasi' => '6000',
            ],
            [
                'tahun' => '2021',
                'total_populasi' => '1000000',
                'akreditasi' => '50000',
                'belum_akreditasi' => '7000',
            ],
            [
                'tahun' => '2022',
                'total_populasi' => '1200000',
                'akreditasi' => '60000',
                'belum_akreditasi' => '8000',
            ],
            // Add more data as needed
        ];

        // Insert data into the table
        DB::table('populasis')->insert($data);
    }
}
