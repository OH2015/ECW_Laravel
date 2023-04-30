<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_message')->truncate();
        DB::table('tm_message')->insert([
            [
                'msg_cd'       => 	'item_search_no_result',
                'msg_val'      => 	'検索条件に一致する商品はありませんでした。',
                'description'  =>   '[商品一覧]検索結果が0件だった時の文言',
                'update_by'    => 	'ecwinit',
                'insert_by'    => 	'ecwinit'     
            ],
            
        ]);
    }
}
