<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSaroRecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saro_recs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('saro_id');
            $table->string('expense_class');
            $table->unsignedInteger('uacs_id');
            $table->string('particulars', 300);
            $table->unsignedDecimal('amount', 10,2);
            $table->timestamps();
        });

        Schema::table('saro_recs', function (Blueprint $table) {
            $table->foreign('uacs_id')
                ->references('id')
                ->on('uacs')
                ->onUpdate('cascade');

            $table->foreign('saro_id')
                ->references('id')
                ->on('saros')
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
        Schema::dropIfExists('saro_recs');
    }
}
