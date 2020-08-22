<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncurredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incurreds', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('saro_id');
            $table->unsignedInteger('uacs_id');
            $table->date('date');
            $table->string('payee');
            $table->unsignedDecimal('amount');
            $table->timestamps();
        });

        Schema::table('incurreds', function (Blueprint $table) {
            $table->foreign('saro_id')
                ->references('id')
                ->on('saro')
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
        Schema::dropIfExists('incurreds');
    }
}
