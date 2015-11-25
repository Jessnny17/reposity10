<?php

use Illuminate\Database\Seeder;

class destination_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destination')->insert(array(
            array(
                'dest_name' => 'Alaska'
            ),
            array(
                'dest_name' => 'Asia & Africa'
            ),
            array(
                'dest_name' => 'Australia & New Zealand'
            ),
            array(
                'dest_name' => 'California & Pacific Coastals'
            ),
            array(
                'dest_name' => 'Canada & New England'
            ),
            array(
                'dest_name' => 'Caribbean'
            ),
            array(
                'dest_name' => 'Europe'
            ),
            array(
                'dest_name' => 'Hawaii'
            ),
            array(
                'dest_name' => 'Japan'
            ),
            array(
                'dest_name' => 'Mexico'
            ),
            array(
                'dest_name' => 'Panama Canal'
            ),
            array(
                'dest_name' => 'South America'
            )
        ));
    }
}
