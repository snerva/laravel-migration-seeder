<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Train;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $train = new Train();
            $train->train_companies = $faker->randomElement(['Trenitalia', 'FFS', 'Italo']);
            $train->train_station_from = $faker->city();
            $train->train_station_to = $faker->city();
            $train->departure_hour = $faker->dateTime();
            $train->arrival_hour = $faker->dateTime();
            $train->train_code = $faker->bothify('???-#####');
            $train->railway_coaches = $faker->numberBetween(2, 20);
            $train->on_time = $faker->randomElement([true, false]);
            $train->cancelled = $faker->randomElement([true, false]);
            $train->save();
        }
    }
}
