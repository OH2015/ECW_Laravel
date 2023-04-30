<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmSystemSettingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_system_setting', function (Blueprint $table) {
            $table->string('ss_id', 6)->comment('システム設定ID');
            $table->string('ss_cd', 80)->comment('システム設定コード');
            $table->string('ss_name', 80)->comment('システム設定名');
            $table->string('ss_val', 4000)->nullable()->comment('システム設定値');
            $table->string('description', 200)->nullable()->comment('説明');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary('ss_id');
            $table->unique('ss_cd');
        });

        DB::statement("ALTER TABLE tm_system_setting COMMENT 'システム設定マスタ' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_system_setting');
    }
}
