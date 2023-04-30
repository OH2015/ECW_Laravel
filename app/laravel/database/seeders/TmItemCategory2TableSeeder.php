<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmItemCategory2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_item_category2')->truncate();
        DB::table('tm_item_category2')->insert([
            [
                'item_category1_cd'    => 	'10',
                'item_category2_cd'    => 	'10',
                'item_category2_name'  => 	'ノートPC',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'10',
                'item_category2_cd'    => 	'20',
                'item_category2_name'  => 	'デスクトップPC',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'10',
                'item_category2_cd'    => 	'30',
                'item_category2_name'  => 	'PC周辺機器',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'20',
                'item_category2_cd'    => 	'10',
                'item_category2_name'  => 	'テレビ',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'20',
                'item_category2_cd'    => 	'20',
                'item_category2_name'  => 	'冷蔵庫',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'30',
                'item_category2_cd'    => 	'10',
                'item_category2_name'  => 	'時計',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
            [
                'item_category1_cd'    => 	'30',
                'item_category2_cd'    => 	'20',
                'item_category2_name'  => 	'雑貨',
                'update_by'            => 	'ecwinit',
                'insert_by'            => 	'ecwinit'     
            ],
        ]);
    }
}
