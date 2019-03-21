<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetrimentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detriments', function (Blueprint $table) {
            $table->increments('id');
            $table->date('data_szkody');
            $table->text('opis');
            $table->integer('cars_id');
            $table->text('wina');
            $table->decimal('koszt',10,2);
            $table->integer('drivers_id');
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
        Schema::dropIfExists('detriment');
    }
}
