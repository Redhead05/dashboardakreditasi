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
            ],
            [
                'tahun' => '2020',
                'total_populasi' => '1200000',
            ],
            [
                'tahun' => '2021',
                'total_populasi' => '1000000',
            ],
            [
                'tahun' => '2022',
                'total_populasi' => '1200000',
            ],
            // Add more data as needed
        ];

        // Insert data into the table
        DB::table('populasis')->insert($data);
    }
}
