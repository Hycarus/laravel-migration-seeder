<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

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
            $train->compagnia = $faker->company();
            $train->stazione_partenza = $faker->city();
            $train->stazione_arrivo = $faker->city();
            $train->data_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->ora_partenza = $faker->time();
            $train->data_arrivo = $faker->dateTimeBetween('-1 day', '+1 day');
            $train->ora_arrivo = $faker->time();
            $train->codice_treno = $faker->ean13();
            $train->numero_carrozze = $faker->numberBetween(1, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
