<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class socialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $icons = [
            [
                'content' => 1,
                'icon' => 1,
                'social' => null,
            ],
            [
                'content' => 1,
                'icon' => 2,
                'social' => null,
            ],
            [
                'content' => 1,
                'icon' => 3,
                'social' => null,
            ],
            [
                'content' => 1,
                'icon' => 4,
                'social' => null,
            ],
            [
                'content' => 1,
                'icon' => 5,
                'social' => null,
            ],
            [
                'content' => 7,
                'icon' => 8,
                'social' => "https://www.linkedin.com/in/jarod-iking-907004162/",
            ],
            [
                'content' => 7,
                'icon' => 9,
                'social' => "https://github.com/JarodIking",

            ],
        ];

        foreach ($icons as $icon) {
            DB::table('socials')->insert([
                'contents' => $icon['content'],
                'icon_id' => $icon['icon'],
                'social' => $icon['social'],
            ]);
        }
    }
}
