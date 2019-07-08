<?php

use Illuminate\Database\Seeder;

class CountariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countaries')->insert(
            [
                ['name' => 'USA', 'short_code' => 'USA'],
                ['name' => 'UAE', 'short_code' => 'UAE'],
                ['name' => 'India', 'short_code' => 'IND'],
                ['name' => 'Australia', 'short_code' => 'AUS'],
                ['name' => 'New zeeland', 'short_code' => 'NZL'],
                ['name' => 'Japan', 'short_code' => 'JPN']
            ]
        );
    }
}
