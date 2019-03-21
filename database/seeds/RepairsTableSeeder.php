<?php

use Illuminate\Database\Seeder;

class RepairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $repair = new \App\Repairs();
        $repair->data_naprawy = '2017-02-25';
        $repair->przedmiot = 'Wymiana rozrzadu';
        $repair->koszt = '1500.00';
        $repair->wykonawca = 'Ganinex Katowice';
        $repair->cars_id = '1';
        $repair->save();
        
        $repair = new \App\Repairs();
        $repair->data_naprawy = '2017-03-15';
        $repair->przedmiot = 'Wymiana oleju';
        $repair->koszt = '500.00';
        $repair->wykonawca = 'Robicar Chorzów';
        $repair->cars_id = '2';
        $repair->save();
        
        $repair = new \App\Repairs();
        $repair->data_naprawy = '2017-10-25';
        $repair->przedmiot = 'Przegląd techniczny';
        $repair->koszt = '120.00';
        $repair->wykonawca = 'SKP Katowice';
        $repair->cars_id = '1';
        $repair->save();
    }
}