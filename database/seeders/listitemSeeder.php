<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class listitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listitems = [
            [
                'text' => "C#",
                'content' => 2,
                'icon' => 7,
            ],
            [
                'text' => "C++",
                'content' => 2,
                'icon' => 7,
            ],
            [
                'text' => "jquery",
                'content' => 3,
                'icon' => 7,
            ],
            [
                'text' => "Laravel",
                'content' => 4,
                'icon' => 6,
            ],
            [
                'text' => "SQL",
                'content' => 5,
                'icon' => 7,
            ],
            [
                'text' => "Nginx",
                'content' => 5,
                'icon' => 7,
            ],
            [
                'text' => "Linux",
                'content' => 5,
                'icon' => 7,
            ],
            [
                'text' => "Mobile-First, Responsive Design",
                'content' => 6,
                'icon' => 7,
            ],
            [
                'text' => "Cross Browser Testing & Debugging",
                'content' => 6,
                'icon' => 7,
            ],
            [
                'text' => "Agile Development & Scrum",
                'content' => 6,
                'icon' => 7,
            ],
            [
                'text' => "Agile Development & Scrum",
                'content' => 21,
                'icon' => 7,
            ],
        ];

        foreach ($listitems as $item) {
            DB::table('listitems')->insert([
                'text' => $item['text'],
                'contents' => $item['content'],
                'icon_id' => $item['icon'],
            ]);
        }

    }
}
