<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmItemStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_item_status')->truncate();
        DB::table('tm_item_status')->insert([
            [
                'status_cd'    => 	'00',
                'status_name'  => 	'販売中',
                'update_by'    => 	'ecwinit',
                'insert_by'    => 	'ecwinit'     
            ],
            [
                'status_cd'    => 	'01',
                'status_name'  => 	'予約受付中',
                'update_by'    => 	'ecwinit',
                'insert_by'    => 	'ecwinit'     
            ],
            [
                'status_cd'    => 	'99',
                'status_name'  => 	'取扱終了',
                'update_by'    => 	'ecwinit',
                'insert_by'    => 	'ecwinit'     
            ],
        ]);
    }
}
