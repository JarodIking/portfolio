<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class tabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //array of tab data
        $tabs = [
            [
                'name' => 'skills',
            ],
            [
                'name' => 'about',
            ],
            [
                'name' => 'experince',
            ],
            [
                'name' => 'education',
            ],
            [
                'name' => 'interests',
            ],
            [
                'name' => 'websites',
            ],
            [
                'name' => 'projects',
            ],
        ];

        //insert data into table
        foreach ($tabs as $tab) {
            DB::table('tabs')->insert([
                'name' => $tab['name'],
            ]);
        }   
    }
}
