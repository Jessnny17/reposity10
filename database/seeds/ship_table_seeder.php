<?php

use Illuminate\Database\Seeder;

class ship_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ship')->insert(array(
            array(
                'ship_name' => 'Caribbean Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Coral Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Crown Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Dawn Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Diamond Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Emerald Princess',
                'cruise_line_id'=>'1'
            ),
            array(
                'ship_name' => 'Golden Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Grand Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Island Princess',
                'line_id'=>'1'
            ),
            array(
                'ship_name' => 'Ocean Princess',
                'line_id'=>'1'
            )
        ));
    }
}
