<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmSystemSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_system_setting')->truncate();
        DB::table('tm_system_setting')->insert([
            [
                'ss_id'       => 	'001000',
                'ss_cd'       => 	'system_name1',
                'ss_name'     =>    'システム名1',
                'ss_val'      => 	'ECWINDOW',
                'description' => 	'システム名英語',
                'update_by'   => 	'ecwinit',
                'insert_by'   => 	'ecwinit'   
            ],
            [
                'ss_id'       => 	'001001',
                'ss_cd'       => 	'system_name2',
                'ss_name'     =>    'システム名2',
                'ss_val'      => 	'ECウインドウ',
                'description' => 	'システム名日本語',
                'update_by'   => 	'ecwinit',
                'insert_by'   => 	'ecwinit'   
            ],
            [
                'ss_id'       => 	'001002',
                'ss_cd'       => 	'system_name_abbr',
                'ss_name'     =>    'システム名略称',
                'ss_val'      => 	'ECW',
                'description' => 	'システム名略称',
                'update_by'   => 	'ecwinit',
                'insert_by'   => 	'ecwinit'   
            ],
            [
                'ss_id'       => 	'001003',
                'ss_cd'       => 	'item_image_url',
                'ss_name'     =>    'Webサーバ商品画像参照URL',
                'ss_val'      => 	'http://localhost:80/ecw/images/item/',
                'description' => 	'Webサーバ（Apache）上の商品画像を参照する際のURL',
                'update_by'   => 	'ecwinit',
                'insert_by'   => 	'ecwinit'   
            ],
        ]);
    }
}
