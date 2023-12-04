<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categoriesCount = DB::table('categories')->count();
        foreach (range(1, 30) as $index) {
            $startDate = '2023-01-01 00:00:00';
            $endDate = '2023-12-31 23:59:59';



            DB::table('posts')->insert([
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'category_id' => $faker->numberBetween(1, $categoriesCount),
                'created_at' => $faker->dateTimeBetween($startDate, $endDate),
            ]);




    }
}
}

