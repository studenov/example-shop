<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Беговые дорожки',
                'code' => 'treadmills',
                'description' => 'Описание к беговым дорожкам',
                'image' => 'categories/treadmills.jpg',
            ],
            [
                'name' => 'Орбитреки',
                'code' => 'orbitracks',
                'description' => 'Описание к орбитрекам',
                'image' => 'categories/orbitracks.jpg',
            ],
            [
                'name' => 'Велотренажеры',
                'code' => 'exercise_bikes',
                'description' => 'Описание к велотренажерам',
                'image' => 'categories/exercise_bikes.jpg',
            ],
            [
                'name' => 'Силовые тренажеры',
                'code' => 'strength_training',
                'description' => 'Описание к силовым тренажерам',
                'image' => 'categories/st_training.jpg',
            ],
        ]);
    }
}
