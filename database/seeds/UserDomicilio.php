<?php

use Illuminate\Database\Seeder;
use App\UserDomicilio as ModelUserDomicilio;

class UserDomicilio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelUserDomicilio::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            ModelUserDomicilio::create([
                "user_id" => $faker->randomNumber(2),
                "numero_exterior" => $faker->randomNumber(4),
                "colonia" => $faker->address(),
                "cp" => $faker->postcode(),
                "ciudad" => $faker->city()

            ]);
        }
    }
}
