<?php

/*
 * This file is part of the IndoRegion package.
 *
 * (c) Azis Hapidin <azishapidin.com | azishapidin@gmail.com>
 *
 */

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use AzisHapidin\IndoRegion\RawDataGetter;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IndoRegionProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     *
     * @return void
     */
    public function run()
    {
        $provinces = [

            ['id_provinsi'=>11,'nama'=>'ACEH'],
            ['id_provinsi'=>12,'nama'=>'SUMATERA UTARA'],
            ['id_provinsi'=>13,'nama'=>'SUMATERA BARAT'],
            ['id_provinsi'=>14,'nama'=>'RIAU'],
            ['id_provinsi'=>15,'nama'=>'JAMBI'],
            ['id_provinsi'=>16,'nama'=>'SUMATERA SELATAN'],
            ['id_provinsi'=>17,'nama'=>'BENGKULU'],
            ['id_provinsi'=>18,'nama'=>'LAMPUNG'],
            ['id_provinsi'=>19,'nama'=>'KEPULAUAN BANGKA BELITUNG'],
            ['id_provinsi'=>21,'nama'=>'KEPULAUAN RIAU'],
            ['id_provinsi'=>31,'nama'=>'DKI JAKARTA'],
            ['id_provinsi'=>32,'nama'=>'JAWA BARAT'],
            ['id_provinsi'=>33,'nama'=>'JAWA TENGAH'],
            ['id_provinsi'=>34,'nama'=>'DI YOGYAKARTA'],
            ['id_provinsi'=>35,'nama'=>'JAWA TIMUR'],
            ['id_provinsi'=>36,'nama'=>'BANTEN'],
            ['id_provinsi'=>51,'nama'=>'BALI'],
            ['id_provinsi'=>52,'nama'=>'NUSA TENGGARA BARAT'],
            ['id_provinsi'=>53,'nama'=>'NUSA TENGGARA TIMUR'],
            ['id_provinsi'=>61,'nama'=>'KALIMANTAN BARAT'],
            ['id_provinsi'=>62,'nama'=>'KALIMANTAN TENGAH'],
            ['id_provinsi'=>63,'nama'=>'KALIMANTAN SELATAN'],
            ['id_provinsi'=>64,'nama'=>'KALIMANTAN TIMUR'],
            ['id_provinsi'=>65,'nama'=>'KALIMANTAN UTARA'],
            ['id_provinsi'=>71,'nama'=>'SULAWESI UTARA'],
            ['id_provinsi'=>72,'nama'=>'SULAWESI TENGAH'],
            ['id_provinsi'=>73,'nama'=>'SULAWESI SELATAN'],
            ['id_provinsi'=>74,'nama'=>'SULAWESI TENGGARA'],
            ['id_provinsi'=>75,'nama'=>'GORONTALO'],
            ['id_provinsi'=>76,'nama'=>'SULAWESI BARAT'],
            ['id_provinsi'=>81,'nama'=>'MALUKU'],
            ['id_provinsi'=>82,'nama'=>'MALUKU UTARA'],
            ['id_provinsi'=>91,'nama'=>'PAPUA BARAT'],
            ['id_provinsi'=>94,'nama'=>'PAPUA'],
        ];

        foreach ($provinces as &$province) {
            // Add a 'slug' field to each province
            $province['slug'] = Str::slug($province['nama']);
        }

        // Insert data into the table
        DB::table('ref_provinsis')->insert($provinces);
    }
}
