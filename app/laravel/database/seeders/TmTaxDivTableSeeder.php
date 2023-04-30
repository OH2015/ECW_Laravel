<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TmTaxDivTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tm_tax_div')->truncate();
        DB::table('tm_tax_div')->insert([
            [
                 'tax_div_cd'  =>    '01'
                ,'tax_rate'    =>    10
                ,'tax_name'    =>    '標準税率'
                ,'update_by'   => 	'ecwinit'
                ,'insert_by'   => 	'ecwinit'     
            ],
            [
                'tax_div_cd'  =>    '02'
               ,'tax_rate'    =>    8
               ,'tax_name'    =>    '軽減税率'
               ,'update_by'   => 	'ecwinit'
               ,'insert_by'   => 	'ecwinit'     
           ],
        ]);
    }
}
