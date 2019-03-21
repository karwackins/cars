<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DetrimentRequest extends FormRequest
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
            'opis' => 'required',
            'koszt' => 'required',
        ];
    }
    
    public function messages()
    {
    return [
        'koszt.required'  => 'Pole Koszt jest wymagane',
        'opis.required'  => 'Pole Opis jest wymagane',

    ];
    }
}
