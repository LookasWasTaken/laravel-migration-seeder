<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $train = new Train();
        $train->company = $faker->words(2, true);
        $train->departure_station = $faker->words(3, true);
        $train->arrival_station = $faker->words(3, true);
        $train->departure_time = $faker->date() . $faker->time();
        $train->arrival_time = $faker->date() . $faker->time();
        $train->train_code = $faker->bothify('###'). '-' . $faker->lexify('???').$faker->bothify('##########');
        $train->carriages = $faker->numberBetween(1, 20);
        $train->save();
    }
}
