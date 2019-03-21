<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShoppingRequest extends FormRequest
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
        'data_zakupu' => 'required',
        'produkt' => 'required',
        'kwota' => 'required',   
        'description' => 'required',
        'stan_licznika' => 'required',    
        ];
    }
    
    public function messages()
    {
    return [
        'data_zakupu.required' => 'Pole Data zakupu jest wymagane',
        'produkt.required'  => 'Pole Produkt jest wymagane',
        'kwota.required'  => 'Pole Kwota jest wymagane',
        'description.required'  => 'Pole Opis jest wymagane',
        'stan_licznika.required'  => 'Pole Stan licznika jest wymagane',
    ];
    }
}
