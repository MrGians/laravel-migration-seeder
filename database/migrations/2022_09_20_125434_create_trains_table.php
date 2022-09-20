<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
            $table->string('azienda', 50);
            $table->string('stazione_partenza', 100);
            $table->string('stazione_arrivo', 100);
            $table->time('orario_partenza', 0);
            $table->time('orario_arrivo', 0);
            $table->string('codice_treno', 10);
            $table->smallInteger('num_carrozze')->unsigned();
            $table->boolean('in_orario')->default(1);
            $table->boolean('cancellato')->default(0);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
