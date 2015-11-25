<?php

use Illuminate\Database\Seeder;

class cabin_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cabin')->insert(array(
            array(
                'cabin_name' => 'Inside'
            ),
            array(
                'cabin_name' => 'Outside'
            ),
            array(
                'cabin_name' => 'Balcony'
            ),
            array(
                'cabin_name' => 'Suite'
            )
        ));
    }
}
