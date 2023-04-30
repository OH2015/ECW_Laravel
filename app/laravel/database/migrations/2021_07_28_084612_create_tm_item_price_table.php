<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmItemPriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_item_price', function (Blueprint $table) {
            $table->string('item_cd', 10)->comment('商品コード');
            $table->decimal('no_tax_retail_price', 19, 4)->default(0)->comment('税抜上代単価');
            $table->decimal('no_tax_wholesale_price', 19, 4)->default(0)->comment('税抜下代単価');
            $table->string('tax_div_cd', 2)->default('00')->comment('消費税率区分コード');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary('item_cd');
        });

        DB::statement("ALTER TABLE tm_item_price COMMENT '商品単価マスタ' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_item_price');
    }
}
