<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_message', function (Blueprint $table) {
            $table->string('msg_cd', 80)->comment('メッセージコード');
            $table->string('msg_val', 200)->default('')->comment('文言');
            $table->string('description', 200)->nullable()->comment('説明');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary('msg_cd');
        });

        DB::statement("ALTER TABLE tm_message COMMENT 'メッセージマスタ' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_message');
    }
}
