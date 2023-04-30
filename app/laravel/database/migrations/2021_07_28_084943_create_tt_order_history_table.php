<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTtOrderHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tt_order_history', function (Blueprint $table) {
            $table->string('order_no',10)->comment('注文番号');
            $table->timestamp('order_date')->comment('注文日付');
            $table->integer('record_no')->comment('明細番号');
            $table->string('item_cd',20)->comment('商品コード');
            $table->decimal('order_quantity', 19, 4)->default(0)->comment('注文数量');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary(['order_no','record_no']);
            
        });

        DB::statement("ALTER TABLE tt_order_history COMMENT '受注履歴トラン' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tt_order_history');
    }
}
