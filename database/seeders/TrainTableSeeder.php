<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {
            $new_train = new Train();
            $new_train->agency = $faker->name();
            $new_train->departure_station = $faker->title();
            $new_train->arrival_station = $faker->title();
            $new_train->departure_time = $faker->time();
            $new_train->arrival_time = $faker->time();
            $new_train->code_of_train = $faker->randomFloat(0, 20000, 40000);
            $new_train->train_car_number = $faker->randomFloat(0, 5, 15);
            $new_train->is_on_time = $faker->boolean();
            $new_train->is_deleted = $faker->boolean();
            $new_train->save();
        }
    }
}


// $new_train->string('agency', 25);
//             $new_train->string('departure_station', 20);
//             $new_train->string('arrival_station', 20);
//             $new_train->time('departure_time');
//             $new_train->time('arrival_time');
//             $new_train->string('code_of_train', 15)->nullable();
//             $new_train->integer('train_car_number')->nullable();
//             $new_train->boolean('is_on_time')->default(1);
//             $new_train->boolean('is_deleted')->default(0);
