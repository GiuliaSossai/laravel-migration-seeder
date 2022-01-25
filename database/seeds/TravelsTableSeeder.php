<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++){
            $new_travel = new Travel();
            $new_travel->destination = $faker->city();
            $new_travel->country = $faker->country();
            $new_travel->facility_name = $faker->company();
            $new_travel->address = $faker->address();
            $new_travel->description = $faker->text(100);
            $new_travel->price = $faker->randomFloat(2, 0, 999);
            $new_travel->days_of_trip = $faker->numberBetween(0, 30);
            $new_travel->save();
        }
    }
}
