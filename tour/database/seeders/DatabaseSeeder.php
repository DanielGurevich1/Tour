<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //client
        foreach (range(1, 10) as $_) {
            $faker = Factory::create();
            DB::table('clients')->insert([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
                'phone' => $faker->phoneNumber,
                'email' => Str::random(7) . '@gmail.com',
                'country' => $faker->country(),
                'portret' => $faker->imageUrl(50, 100),

            ]);
        }
        // user
        foreach (range(1, 10) as $_) {

            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => Str::random(7) . '@gmail.com',
                'password' => Hash::make('123'),
            ]);
        }
        //managers
        foreach (range(1, 10) as $_) {

            DB::table('managers')->insert([
                'name' => $faker->firstName,
                'surname' => $faker->lastName(),
                'client_id' => rand(1, 10),
                'portret' => $faker->imageUrl(50, 100),

            ]);
        }
        // programs
        foreach (range(1, 10) as $_) {

            DB::table('programs')->insert([
                'title' => $faker->country,
                'day1' => $faker->city,
                'about_d1' => $faker->text(rand(20, 50)),
                'day2' => $faker->city,
                'about_d2' => $faker->text(rand(20, 50)),
                'manager_id' => rand(1, 10),
                'client_id' => rand(1, 10),

            ]);
        }
    }
}