<?php

namespace Database\Seeders;

use App\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){

            $startDate = $faker->dateTimeBetween('now', '+1 month');

            $trip = new Trip();
            $trip->agenzy_name = $faker->word();
            $trip->departure_station = $faker->words(2, true);
            $trip->arrival_station = $faker->words(2, true);
            $trip->departure_time = $startDate;
            $trip->arrival_time = $faker->dateTimeBetween($startDate, $startDate->format('Y-m-d H:i:s').' +2 hours');
            $trip->train_code = $faker->randomNumber(5, false);
            $trip->number_of_carriages = $faker->randomNumber(1, false);
            $trip->save();

        }
    }
}
