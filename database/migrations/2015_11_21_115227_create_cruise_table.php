<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCruiseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cruise', function (Blueprint $table) {
            $table->increments('cruise_id');
            $table->integer('ship_id')->unsigned();
            $table->date('start_date');
            $table->integer('duration');
            $table->integer('dest_id')->unsigned();
            $table->integer('departure_port')->unsigned();
            $table->integer('line_id')->unsigned();
            $table->string('cruise_status',20);


            $table->foreign('ship_id')
                ->references('ship_id')->on('ship');

            $table->foreign('line_id')
                ->references('line_id')->on('cruise_line');

            $table->foreign('dest_id')
                ->references('dest_id')->on('destination');

            $table->foreign('departure_port')
                ->references('port_id')->on('port');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cruise');
    }
}
