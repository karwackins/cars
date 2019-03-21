<?php

use Illuminate\Database\Seeder;

class ShoppingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shopping = new \App\Shopping();
        $shopping->data_zakupu = '2016-11-20';
        $shopping->produkt = 'opony zimowe';
        $shopping->kwota = '1000';
        $shopping->save();
        
        $shopping = new \App\Shopping();
        $shopping->data_zakupu = '2017-01-25';
        $shopping->produkt = 'Wycieraczki';
        $shopping->kwota = '50';
        $shopping->save();
        
        $shopping = new \App\Shopping();
        $shopping->data_zakupu = '2017-05-20';
        $shopping->produkt = 'Żarówki';
        $shopping->kwota = '100';
        $shopping->save();
        
    }
}
