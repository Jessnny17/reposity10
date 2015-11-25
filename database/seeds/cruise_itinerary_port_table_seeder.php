<?php

use Illuminate\Database\Seeder;

class cruise_itinerary_port_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruise_itinerary_port')->insert(array(
            array(
                'cruise_id' => 1,
                'port_id' => 34
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 1
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 2
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 5
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 26
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 37
            ),
            array(
                'cruise_id' => 1,
                'port_id' => 22 //all cruise_id 1, australia
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 32
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 34
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 17
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 35
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 25
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 12
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 4
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 9
            ),
            array(
                'cruise_id' => 2,
                'port_id' => 14 //all cruise_id 2, japan
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 37
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 36
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 35
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 34
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 3
            ),
            array(
                'cruise_id' => 3,
                'port_id' => 32 //all cruise_id 3, hawaii
            )

        ));
    }
}
