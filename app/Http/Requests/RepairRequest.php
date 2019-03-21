<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepairRequest extends FormRequest
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
            'przedmiot' => 'required',
            'kwota' => 'required',
            'stan_licznika' => 'required',
            'wykonawca' => 'required',
            'description' => 'required',
        ];
    }
    
    public function messages()
    {
    return [
        'przedmiot.required' => 'Pole Przedmiot zakupu jest wymagane',
        'kwota.required'  => 'Pole Kwota jest wymagane',
        'description.required'  => 'Pole Opis jest wymagane',
        'wykonawca.required'  => 'Pole Wykonawca jest wymagane',
        'stan_licznika.required'  => 'Pole Stan licznika jest wymagane',
    ];
    }
}
