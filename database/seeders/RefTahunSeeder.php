<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RefTahunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tahun' => '2019',
            ],
            [
                'tahun' => '2020',
            ],
            [
                'tahun' => '2021',
            ],
            [
                'tahun' => '2022',
            ],
            // Add more data as needed
        ];

        // Insert data into the table
        DB::table('ref_tahuns')->insert($data);
    }
}
