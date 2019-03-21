<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingsForCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoppings_for_cars', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cars_id')->unsigned();
            $table->integer('shoppings_id')->unsigned();
            $table->timestamps();
        });
        
        Schema::table('shoppings_for_cars', function (Blueprint $table){
            $table->foreign('cars_id')
                  ->references('id')
                  ->on('cars');  
        });
        
        Schema::table('shoppings_for_cars', function (Blueprint $table){
            $table->foreign('shoppings_id')
                  ->references('id')
                  ->on('shoppings'); 
                
        
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shoppings_for_cars');
    }
}
