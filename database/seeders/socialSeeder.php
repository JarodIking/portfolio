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
        ];

        foreach ($icons as $icon) {
            DB::table('social')->insert([
                'content' => $icon['content'],
                'icon' => $icon['icon'],
                'social' => $icon['social'],
            ]);
        }
    }
}
