<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        \DB::table('user')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => app('hash')->make('admin123'),
        ]);
    }
}
