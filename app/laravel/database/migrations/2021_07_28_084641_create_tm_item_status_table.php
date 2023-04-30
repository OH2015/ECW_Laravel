<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmItemStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_item_status', function (Blueprint $table) {
            $table->char('status_cd', 2)->comment('ステータスコード');
            $table->char('status_name', 30)->default('')->comment('ステータス名');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary('status_cd');
        });

        DB::statement("ALTER TABLE tm_item_status COMMENT '商品ステータスマスタ' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_item_status');
    }
}
