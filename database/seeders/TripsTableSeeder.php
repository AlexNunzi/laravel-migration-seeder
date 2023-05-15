<?php

namespace Database\Seeders;

use App\Functions\Helpers;
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


    // SEEDER TRAMITE FAKER

    // public function run(Faker $faker)
    // {
    //     for($i = 0; $i < 5; $i++){

    //         $startDate = $faker->dateTimeBetween('now', '+1 month');

    //         $trip = new Trip();
    //         $trip->agenzy_name = $faker->word();
    //         $trip->departure_station = $faker->words(2, true);
    //         $trip->arrival_station = $faker->words(2, true);
    //         $trip->departure_time = $startDate;
    //         $trip->arrival_time = $faker->dateTimeBetween($startDate, $startDate->format('Y-m-d H:i:s').' +2 hours');
    //         $trip->train_code = $faker->randomNumber(5, false);
    //         $trip->number_of_carriages = $faker->randomNumber(1, false);
    //         $trip->save();

    //     }
    // }

    // SEEDER TRAMITE FILE CSV

    public function run()
    {
        $csvContent = Helpers::getCsvContent(__DIR__ . '/trains.csv');

        foreach ($csvContent as $index => $row) {
            if ($index > 0) {
                $newTrip = new Trip();
                $newTrip->agenzy_name = $row[0];
                $newTrip->departure_station = $row[1];
                $newTrip->arrival_station = $row[2];
                $newTrip->departure_time = $row[3];
                $newTrip->arrival_time = $row[4];
                $newTrip->train_code = $row[5];
                $newTrip->number_of_carriages = $row[6];
                $newTrip->punctual = $row[7];
                $newTrip->deleted = $row[8];
                $newTrip->save();
            }
        }
    }
}
