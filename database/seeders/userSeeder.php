<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert 1 admin account into the users table
        DB::table('users')->insert([
            'firstname' => 'jarod',
            'lastname' => 'iking',
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'email' => 'jarodiking17@gmail.com',
            'level' => 1,
            'active' => 0,
            'fontawesome_kit' => "<script src='https://kit.fontawesome.com/069b301ca8.js' crossorigin='anonymous'></script>"
        ]);
    }
}
