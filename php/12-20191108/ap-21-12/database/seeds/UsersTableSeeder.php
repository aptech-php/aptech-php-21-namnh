<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            User::insert([
                'name' => $faker->name($gender = null),
                'email' => $faker->safeEmail,
                'password' => bcrypt('123')
            ]);
        }
    }
}