<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TmBrandTableSeeder::class,
            TmItemCategory1TableSeeder::class,
            TmItemCategory2TableSeeder::class,
            TmItemPriceTableSeeder::class,
            TmItemTableSeeder::class,
            TmItemStatusTableSeeder::class,
            TmMessageTableSeeder::class,
            TmSystemSettingTableSeeder::class,
            TmTaxDivTableSeeder::class,
        ]);

        // Seeder、Factoryクラスで実装できなかった処理は直接sqlを読み込んで実行します
        $path = 'database/sql/insert_data.sql';
        DB::unprepared(file_get_contents($path)); 

        //factoryクラスでのテストデータ生成も試したが、処理が遅いのでボツにしました。
        //\App\Models\TmItem::factory()->count(3000)->create();
    }
}
