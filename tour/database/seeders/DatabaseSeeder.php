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
        $faker = Factory::create();
        DB::table('users')->insert([
            'name' => $faker->name,
            'surname' => $faker->surname,
            'email' => Str::random(10) . '@gmail.com',

            'password' => Hash::make('123'),

            // $table->string('name');
            // $table->string('surname');
            // $table->string('phone');
            // $table->string('email');
            // $table->string('country');
        ]);


        foreach (range(1, 10) as $_) {

            DB::table('clients')->insert([
                'name' => $faker->name,
                'email' => 'briedis@gmail.com',
                'password' => Hash::make('123'),
            ]);
        }
    }
}