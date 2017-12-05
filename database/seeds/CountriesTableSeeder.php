<?php

namespace database\seeds;

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->delete();
        $countries = array(
            array(
                'id' => 1,
                'code' => 'US',
                'name' => 'United States'
            ),
            array(
                'id' => 2,
                'code' => 'CA',
                'name' => 'Canada'
            ),
            array(
                'id' => 3,
                'code' => 'AF',
                'name' => 'Afghanistan'
            ),
            array(
                'id' => 4,
                'code' => 'AL',
                'name' => 'Albania'
            ),
            array(
                'id' => 235,
                'code' => 'YE',
                'name' => 'Yemen'
            ),
            array(
                'id' => 236,
                'code' => 'YU',
                'name' => 'Yugoslavia'
            ),
            array(
                'id' => 237,
                'code' => 'ZR',
                'name' => 'Zaire'
            ),
            array(
                'id' => 238,
                'code' => 'ZM',
                'name' => 'Zambia'
            ),
            array(
                'id' => 239,
                'code' => 'ZW',
                'name' => 'Zimbabwe'
            )
        );

        DB::table('countries')->insert($countries);
    }
}
