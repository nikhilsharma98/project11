<?php

use Illuminate\Database\Seeder;

class statesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert(
            [
                ['name' => 'Haryana', 'short_code' => 'HAR'],
                ['name' => 'Assam', 'short_code' => 'ASM'],
                ['name' => 'GOA', 'short_code' => 'GOA'],
                ['name' => 'Himachal Pradesh', 'short_code' => 'HP'],
                ['name' => 'Jammu & Kashmir', 'short_code' => 'JK'],
                ['name' => 'Maharashtra', 'short_code' => 'MHS']
            ]
        );

        echo "done";
    }
}
