<?php

use Illuminate\Database\Seeder;
use App\User as ModelUser;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelUser::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            ModelUser::create([
                'name' => $faker->userName(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->password()),
                "fecha_nacimiento" => $faker->date()
            ]);
        }
    }
}
