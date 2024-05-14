<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Illuminate\Support\Str;

class TrainsTableSeederCsv extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data_str=fopen(__DIR__ . '/trains.csv' , 'r');
        $i=0;

        while (($row = fgetcsv($data_str))) {

            if ($i>0) {

                $newTrain= new Train;

                $newTrain->azienda=$row[0];
                $newTrain->stazione_partenza=$row[1];
                $newTrain->stazione_arrivo=$row[2];
                $newTrain->orario_partenza=$row[3];
                $newTrain->orario_arrivo=$row[4];
                $newTrain->codice_treno=$row[5];
                $newTrain->numero_carrozze=$row[6];
                $newTrain->in_orario=$row[7];
                $newTrain->cancellato=$row[8];
                $newTrain->slug=$this->generateSlug($newTrain->azienda);

                $newTrain->save();


            }

            $i++;
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
