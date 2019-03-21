<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'marka' => 'required',
        'model' => 'required',
        'rodzaj' => 'required',
        'liczba_miejsc' => 'required',
        'zabezpieczenia' => 'required',
        'nr_rej' => 'required',
        'nr_vin' => 'required',
        'rok_prod' => 'required',
        'rok_zakupu' => 'required',
        'pojemnosc' => 'required',
        'data_pierw_rejestracji' => 'required',
        'data_przegladu_tech' => 'required',
        'data_przegladu_okres' => 'required',
        'norma_letnia' => 'required',
        'norma_zimowa' => 'required',
        ];
    }
    
    public function messages() {
        return [
        'marka.required' => 'Pole "Marka samochodu" jest wymagane',
        'model.required' => 'Pole "Model samochodu" jest wymagane',
        'rodzaj.required' => 'Pole "Rodzaj samochodu" jest wymagane',
        'liczba_miejsc.required' => 'Pole "Liczba miejsc" jest wymagane',
        'zabezpieczenia.required' => 'Pole "Zabezpieczenia" jest wymagane',
        'nr_rej.required' => 'Pole "Nr rejestracyjny" jest wymagane',
        'nr_vin.required' => 'Pole "Nr Vin" jest wymagane',
        'rok_prod.required' => 'Pole "Rok produkcji" jest wymagane',
        'rok_zakupu.required' => 'Pole "Rok zakupu" jest wymagane',
        'pojemnosc.required' => 'Pole "Pojemność" jest wymagane',
        'data_pierw_rejestracji.required' => 'Pole "Data pierwszej rejestracji" jest wymagane',
        'data_przegladu_tech.required' => 'Pole "Data przeglądu technicznego" jest wymagane',
        'data_przegladu_okres.required' => 'Pole "Data przeglądu okresowego" jest wymagane',
        'norma_letnia.required' => 'Pole "Norma letnia" jest wymagane',
        'norma_zimowa.required' => 'Pole "Norma zimowa" jest wymagane',
            
        ];
    }
}
