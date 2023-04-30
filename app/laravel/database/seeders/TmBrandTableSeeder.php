<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmBrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_brand')->truncate();
        DB::table('tm_brand')->insert([
            [
                'brand_cd'        => 	'0001',
                'brand_name'      => 	'D**BRAND',
                'brand_name_kana' => 	'D**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'        
            ],
            [
                'brand_cd'        => 	'0002',
                'brand_name'      => 	'E**BRAND',
                'brand_name_kana' => 	'E**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'                      
            ],
            [
                'brand_cd'        => 	'0003',
                'brand_name'      => 	'S**BRAND',
                'brand_name_kana' => 	'S**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'
            ],
            [
                'brand_cd'        => 	'0004',
                'brand_name'      => 	'P**BRAND',
                'brand_name_kana' => 	'P**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'
            ],
            [
                'brand_cd'        => 	'0005',
                'brand_name'      => 	'O**BRAND',
                'brand_name_kana' => 	'O**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'
            ],
            [
                'brand_cd'        => 	'0006',
                'brand_name'      => 	'CI**BRAND',
                'brand_name_kana' => 	'CI**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'
            ],
            [
                'brand_cd'        => 	'0007',
                'brand_name'      => 	'R**BRAND',
                'brand_name_kana' => 	'R**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'
            ],
            [
                'brand_cd'        => 	'0008',
                'brand_name'      => 	'CO**BRAND',
                'brand_name_kana' => 	'CO**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit' 
            ],
            [
                'brand_cd'        => 	'0009',
                'brand_name'      => 	'M**BRAND',
                'brand_name_kana' => 	'M**ブランド',
                'update_by'       => 	'ecwinit',
                'insert_by'       =>   	'ecwinit'        
            ],
        ]);
    }
}
