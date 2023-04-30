<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateTmTaxDivTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_tax_div', function (Blueprint $table) {
            $table->string('tax_div_cd', 2)->comment('消費税率区分コード');
            $table->decimal('tax_rate', 19, 4)->default(0)->comment('消費税率');
            $table->string('tax_name', 20)->default('')->comment('消費税率区分名');
            $table->string('update_by', 20)->nullable()->comment('更新者');
            $table->string('insert_by', 20)->nullable()->comment('登録者');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'))->comment('更新日時');
            $table->primary('tax_div_cd');
        });

        DB::statement("ALTER TABLE tm_tax_div COMMENT '消費税率区分マスタ' ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tm_tax_div');
    }
}
