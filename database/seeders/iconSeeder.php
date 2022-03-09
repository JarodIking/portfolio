<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class iconSeeder extends Seeder
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
                "icon_html" => "fab fa-html5"
            ],
            [
                "icon_html" => "fab fa-css3-alt"
            ],
            [
                "icon_html" => "fab fa-js-square"
            ],
            [
                "icon_html" => "fab fa-php"
            ],
            [
                "icon_html" => "fab fa-bootstrap"
            ],
            [
                "icon_html" => "fab fa-laravel"
            ],
            [
                "icon_html" => "fas fa-check"
            ],
            [
                "icon_html" => "fab fa-linkedin-in"
            ],
            [
                "icon_html" => "fab fa-github"
            ],
        ];

        foreach ($icons as $icon) {
            DB::table('icons')->insert([
                'icon_html' => $icon['icon_html'],
            ]);
        }

    }
}
