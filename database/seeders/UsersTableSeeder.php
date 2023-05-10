<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        foreach (range(1, 50) as $index) {
            $gender = $faker->randomElement(['Male', 'Female', 'Other']);

            User::create([
                'name' => $faker->name($gender),
                'email' => $faker->email(),
                'no_hp' => $faker->phoneNumber,
                'gender' => $gender,
                'password' => Hash::make('password'),
                'role' => 'Client',
            ]);
        }
    }
}

