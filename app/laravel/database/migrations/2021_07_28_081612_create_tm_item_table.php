<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_item', function (Blueprint $table) {
            $table->string('item_cd', 10)->comment('商品コード');
            $table->string('item_name1', 30)->default('')->comment('商品名1');
            $table->string('item_name2', 30)->nullable()->comment('商品名2');
            $table->string('item_category1_cd', 2)->nullable()->comment('商品分類1コード');
            $table->string('item_category2_cd', 2)->nullable()->comment('商品分類2コード');
            $table->string('brand_cd', 4)->nullable()->comment('ブランドコード');
            $table->string('model_number', 40)->nullable()->comment('型番');
            $table->string('jan_cd', 13)->nullable()->comment('JANコード');
            $table->char('item_image_ref_div', 1)->default('1')->comment('商品画像参照区分');
            $table->string('item_image1', 100)->nullable()->comment('商品画像1');
            $table->char('disp_flg', 1)->default('1')->comment('表示フラグ');
            $table->char('status_cd', 2)->default('00')->comment('ステータスコード');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary('item_cd');
        });

        DB::statement("ALTER TABLE tm_item COMMENT '商品マスタ' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_item');
    }
}
