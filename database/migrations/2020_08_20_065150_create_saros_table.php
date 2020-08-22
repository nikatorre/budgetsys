<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSarosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_saro', 300);
            $table->string('type');
            $table->unsignedInteger('ppa_id');
            $table->date('date');
            $table->unsignedDecimal('total', 10, 2);
            $table->text('purpose');
        });

        Schema::table('saros', function (Blueprint $table) {
            $table->foreign('ppa_id')
                ->references('id')
                ->on('ppas')
                ->onUpdate('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('saros');
    }
}
