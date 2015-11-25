<?php

use Illuminate\Database\Seeder;

class ship_cabin_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ship_cabin')->insert(array(
            array(
                'ship_id' => 1,
                'cabin_id' => 1,
                'cabin_price'=> 999,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 1,
                'cabin_id' => 2,
                'cabin_price'=> 1999,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 1,
                'cabin_id' => 3,
                'cabin_price'=> 2999,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 1,
                'cabin_id' => 4,
                'cabin_price'=> 3999,
                'cabin_qty'=>150
            ),

            array(
                'ship_id' => 2,
                'cabin_id' => 1,
                'cabin_price'=> 1569,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 2,
                'cabin_price'=> 1999,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 3,
                'cabin_price'=> 2499,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 2,
                'cabin_id' => 4,
                'cabin_price'=> 3999,
                'cabin_qty'=>150
            ),

            array(
                'ship_id' => 3,
                'cabin_id' => 1,
                'cabin_price'=> 1199,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 3,
                'cabin_id' => 2,
                'cabin_price'=> 1399,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 3,
                'cabin_id' => 3,
                'cabin_price'=> 1699,
                'cabin_qty'=>150
            ),
            array(
                'ship_id' => 3,
                'cabin_id' => 4,
                'cabin_price'=>1799,
                'cabin_qty'=>150
            ),


        ));
    }
}
