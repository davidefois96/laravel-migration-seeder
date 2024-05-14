<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class TrainsTableSeederFaker extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {


        for ($i=0; $i <30 ; $i++) {
            $newTrain= new Train();

            $newTrain->azienda=$faker->sentence(3);
            $newTrain->stazione_partenza=$faker->sentence(4);
            $newTrain->stazione_arrivo=$faker->sentence(3);
            $newTrain->orario_partenza=$faker->time();
            $newTrain->orario_arrivo=$faker->time();
            $newTrain->codice_treno=$faker->iban();
            $newTrain->numero_carrozze=$faker->numberBetween(3, 20);
            $newTrain->in_orario=$faker->boolean();
            $newTrain->cancellato=$faker->boolean();
            $newTrain->slug=$this->generateSlug($newTrain->azienda);

            $newTrain->save();

        }


    }
    private function generateSlug($string){

        $slug=Str::slug($string,'-');
        $original_slug=$slug;
        $exist=Train::where('slug',$slug)->first();
        $c=1;

        while($exist){

            $slug=$original_slug . '-' . $c;
            $exist=Train::where('slug',$slug)->first();
            $c++;

        }

        return $slug;


    }
}
