<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 100; $i++) { 
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_di_partenza = $faker->city();
            $newTrain->stazione_di_arrivo = $faker->city();
            $newTrain->orario_di_partenza = $faker->dateTimeBetween('-1 day', '+1 day');
            $newTrain->orario_di_arrivo = $faker->dateTimeBetween('+1 day', '+2 day');
            $newTrain->codice_treno = 'AB'.$faker->randomDigit;
            $newTrain->numero_carrozze = $faker->numberBetween(4, 30);
            $newTrain->in_orario = $faker->randomElement([true, false]);
            $newTrain->cancllato = $faker->randomElement([true, false]);

            $newTrain->save();
        }
    }
}
