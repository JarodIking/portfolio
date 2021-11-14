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
                "icon_html" => "<i class='fab fa-html5'></i>"
            ],
            [
                "icon_html" => "<i class='fab fa-css3-alt'></i>"
            ],
            [
                "icon_html" => "<i class='fab fa-js-square'></i>"
            ],
            [
                "icon_html" => "<i class='fab fa-php'></i>"
            ],
            [
                "icon_html" => "<i class='fab fa-bootstrap'></i>"
            ],
            [
                "icon_html" => "<i class='fab fa-laravel'></i>"
            ],
            [
                "icon_html" => "<i class='fas fa-check'></i>"
            ],
            [
                "icon_html" => "<i class='fab fa-linkedin-in'></i>"
            ],
            [
                "icon_html" => "<i class='fab fa-github'></i>"
            ],
        ];

        foreach ($icons as $icon) {
            DB::table('icons')->insert([
                'icon_html' => $icon['icon_html'],
            ]);
        }   

    }
}
