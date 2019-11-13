<?php

use App\Category;
use App\Post;
use Illuminate\Database\Seeder;

class CategoryPostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_categories = Category::get()->pluck('id')->toArray();
        // dd($arrayIdOfCategories);
        $array_posts = Post::get()->pluck('id')->toArray();
        // dd($array_categories[array_rand($array_categories)]);
        for ($i = 0; $i < 4; $i++) {
            $random_category_id = $array_categories[array_rand($array_categories)];
            $random_post_id = $array_posts[array_rand($array_posts)];

            $category_post_exists = DB::table('category_post')
                ->where('category_id', $random_category_id)
                ->where('post_id', $random_post_id)
                ->exists();
            // dd($category_post_exists);
            if ($category_post_exists == false) {
                // dd('aa');
                DB::table('category_post')->insert(
                    [
                        'category_id' => $random_category_id,
                        'post_id' => $random_post_id
                    ]
                );
            }
        }
    }
}