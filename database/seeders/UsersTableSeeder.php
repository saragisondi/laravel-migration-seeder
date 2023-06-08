<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker )
    {
        for($i = 0; $i < 10; $i++){
          $newTrain = new Train();
          $newTrain-> company = $faker->sentenceword();
          $newTrain-> slug = Str::slug($newTrain->company, '-');
          $newTrain-> departure_station = $faker->word();
          $newTrain-> arrival_station = $faker->word();
          $newTrain-> departure_time = $faker->time();
          $newTrain-> arrival_time = $faker->time();
          $newTrain-> train_code = $faker->numberBetween(5,10);
          $newTrain-> in_time = $faker->boolean();
          var_dump($newTrain);
          $newTrain -> save;
        }
    }
}