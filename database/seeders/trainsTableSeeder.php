<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;

class trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTrain= new Train();

        $newTrain->azienda='Ferrovie Meridionali';
        $newTrain->stazione_partenza='Sassari';
        $newTrain->stazione_arrivo='Cagliari';
        $newTrain->orario_partenza='12:30:00';
        $newTrain->orario_arrivo='15:30:00';
        $newTrain->codice_treno='asr6y7hdzs';
        $newTrain->numero_carrozze=12;
        $newTrain->in_orario=1;
        $newTrain->cancellato=0;
        $newTrain->slug=$this->generateSlug($newTrain->azienda);

        $newTrain->save();

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
