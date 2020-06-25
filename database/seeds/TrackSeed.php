<?php

use Illuminate\Database\Seeder;

class TrackSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('track')->insert([
            'user_id' => 1,
            'lat' => '1233323',
            'long' => '1233323',
        ]);
    }
}
