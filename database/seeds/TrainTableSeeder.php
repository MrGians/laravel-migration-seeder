<?php

use App\Models\Train;
use Illuminate\Database\Seeder;

class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $train = new Train();

        $train->azienda = 'Azienda di treni';
        $train->stazione_partenza = 'Stazione 1';
        $train->stazione_arrivo = 'Stazione 2';
        $train->orario_partenza = '10:56';
        $train->orario_arrivo = '12:34';
        $train->codice_treno = '5hg7s';
        $train->num_carrozze = 22;
        $train->in_orario = true;
        $train->cancellato = false;

        $train->save();
    }
}
