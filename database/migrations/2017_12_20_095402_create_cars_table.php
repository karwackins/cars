<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('marka');
            $table->string('nr_rej');
            $table->string('nr_vin');
            $table->date('data_ubezp');
            $table->date('rok_prod');
            $table->date('rok_zakupu');
            $table->string('pojemnosc');
            $table->date('data_pierw_rejestracji');
            $table->date('data_przegladu_tech');
            $table->date('data_przegladu_okres');
            $table->integer('norma_letnia');
            $table->integer('norma_zimowa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
