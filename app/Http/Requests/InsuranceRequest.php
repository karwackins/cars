<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InsuranceRequest extends FormRequest
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
            'zakres' => 'required',
            'kwota' => 'required',
            'stan_licznika' => 'required',
            'firma' => 'required',
            'description' => 'required',
        ];
    }
    
    public function messages()
    {
    return [
        'zakres.required' => 'Pole Zakres zakupu jest wymagane',
        'kwota.required'  => 'Pole Kwota jest wymagane',
        'description.required'  => 'Pole Opis jest wymagane',
        'firma.required'  => 'Pole Firma jest wymagane',
        'stan_licznika.required'  => 'Pole Stan licznika jest wymagane',
    ];
    }
}
