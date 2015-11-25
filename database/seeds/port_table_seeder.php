<?php

use Illuminate\Database\Seeder;

class port_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('port')->insert(array(
            array(
                'port_name' => 'Adelaide, Australia'
            ),
            array(
                'port_name' => 'Airlie, Australia'
            ),
            array(
                'port_name' => 'Anchorage, Alaska'
            ),
            array(
                'port_name' => 'Aomori, Japan'
            ),
            array(
                'port_name' => 'Bangkok, Thailand'
            ),
            array(
                'port_name' => 'Beijing (Tianjin), China'
            ),
            array(
                'port_name' => 'Beppu, Japan'
            ),
            array(
                'port_name' => 'Bergen, Norway'
            ),
            array(
                'port_name' => 'Berlin, Germany'
            ),
            array(
                'port_name' => 'Busan, South Korea'
            ),
            array(
                'port_name' => 'Colombo, Sri Lanka'
            ),
            array(
                'port_name' => 'Copenhagen, Denmark'
            ),
            array(
                'port_name' => 'Dubai, United Arab Emirates'
            ),
            array(
                'port_name' => 'Easter Island, Chile'
            ),
            array(
                'port_name' => 'Edinburgh, Scotland'
            ),
            array(
                'port_name' => 'Fremantle, Australia'
            ),
            array(
                'port_name' => 'Gisbone, New Zealand'
            ),
            array(
                'port_name' => 'Hong Kong, China'
            ),
            array(
                'port_name' => 'Honolulu, Hawaii'
            ),
            array(
                'port_name' => 'Incheon, Korea'
            ),
            array(
                'port_name' => 'Istanbul, Turkey'
            ),
            array(
                'port_name' => 'Kagoshima, Japan'
            ),
            array(
                'port_name' => 'Kaohsiung, Taiwan'
            ),
            array(
                'port_name' => 'Langkawi, Malaysia'
            ),
            array(
                'port_name' => 'Lautoka, Fiji'
            ),
            array(
                'port_name' => 'London, England'
            ),
            array(
                'port_name' => 'Los Angeles, California'
            ),
            array(
                'port_name' => 'Osio, Norway'
            ),
            array(
                'port_name' => 'Princess Cays, Bahama'
            ),
            array(
                'port_name' => 'Richards Bay, South Africa'
            ),
            array(
                'port_name' => 'San Diego, California'
            ),
            array(
                'port_name' => 'Sydney, Australia'
            ),
            array(
                'port_name' => 'Tokyo, Japan'
            ),
            array(
                'port_name' => 'Venice, Italy'
            ),
            array(
                'port_name' => 'Ville Saguenay, Quebec'
            ),
            array(
                'port_name' => 'Waterford, New Zealand'
            ),
            array(
                'port_name' => 'Yatsushiro, Japan'
            )

        ));
    }
}
