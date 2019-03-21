<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsurancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('insurances', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ubezp_od');
            $table->date('ubezp_do');
            $table->string('zakres');
            $table->decimal('koszt',10,2);
            $table->string('firma');
            $table->integer('cars_id');
            $table->string('description');
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
        //
    }
}
