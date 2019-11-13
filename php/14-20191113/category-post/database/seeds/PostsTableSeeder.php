<?php

use App\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            Post::insert([
                'title' => $faker->realText(100),
                'description' => $faker->realText(200),
                'content' => $faker->randomHtml()
            ]);
        }
    }
}