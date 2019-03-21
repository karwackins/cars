<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlaceRequest extends FormRequest
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
            'short' => 'required',
            'fullName' => 'required'
        ];
    }
    
    public function messages()
    {
    return [
        'short.required'  => 'Pole Nazwa skrócona jest wymagane',
        'fullName.required'  => 'Pole Pełna nazwa jest wymagane',

    ];
    }
}
