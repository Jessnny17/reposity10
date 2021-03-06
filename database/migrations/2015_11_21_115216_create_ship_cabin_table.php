<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipCabinTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ship_cabin', function (Blueprint $table) {
            $table->integer('ship_id')->unsigned();
            $table->integer('cabin_id')->unsigned();
            $table->integer('cabin_price');
            $table->integer('cabin_qty');

            $table->foreign('ship_id')
                ->references('ship_id')->on('ship');

            $table->foreign('cabin_id')
                ->references('cabin_id')->on('cabin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ship_cabin');
    }
}
