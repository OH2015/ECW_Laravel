<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmItemCategory2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_item_category2', function (Blueprint $table) {
            $table->string('item_category1_cd', 2)->comment('商品分類1コード');
            $table->string('item_category2_cd', 2)->comment('商品分類2コード');
            $table->string('item_category2_name', 30)->default('')->comment('商品分類名');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary(['item_category1_cd','item_category2_cd']);
        });

        DB::statement("ALTER TABLE tm_item_category2 COMMENT '商品分類2マスタ' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_item_category2');
    }
}
