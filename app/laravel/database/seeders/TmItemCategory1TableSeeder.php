<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmItemCategory1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_item_category1')->truncate();
        DB::table('tm_item_category1')->insert([
            [
                'item_category1_cd'    => 	'10',
                'item_category1_name'  => 	'パソコン',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'20',
                'item_category1_name'  => 	'家電',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'30',
                'item_category1_name'  => 	'時計＆雑貨',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
        ]);
    }
}
