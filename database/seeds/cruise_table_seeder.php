<?php

use Illuminate\Database\Seeder;

class cruise_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cruise')->insert(array(
            array(
                'ship_id' => '1',
                'start_date' => '2016-03-12',
                'duration' => '9',
                'dest_id' => '3',
                'departure_port' => '34',
                'line_id'=>'1',
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '2',
                'start_date' => '2016-04-10',
                'duration' => '12',
                'dest_id' => '2',
                'departure_port' => '32',
                'line_id'=>'2',
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '1',
                'start_date' => '2016-05-01',
                'duration' => '18',
                'dest_id' => '4',
                'departure_port' => '26',
                'line_id'=>'1',
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '2',
                'start_date' => '2016-05-02',
                'duration' => '15',
                'dest_id' => '1',
                'departure_port' => '27',
                'line_id'=>'2',
                'cruise_status' => 'Open for booking'
            ),
            array(
                'ship_id' => '3',
                'start_date' => '2016-05-03',
                'duration' => '12',
                'dest_id' => '2',
                'departure_port' => '13',
                'line_id'=>'2',
                'cruise_status' => 'Open for booking'
            ),
        ));
    }
}
