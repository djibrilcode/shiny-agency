<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StagiaireRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cef' => 'required|integer|min_digits:13',
            'nom' => 'required|string|max:25',
            'prenom' => 'required|string|max:25',
            'adresse' => 'required',
            'ville' => 'required'

        ];
    }

    public function messages(): array
    {
        return [
            'cef.required' => 'veuillez renseigner votre cef',
            'cef.min_digits' => 'minimum 13 chiffres',
            'nom.required' => 'veuillez renseigner votre nom',
            'nom.max'      => 'le nom ne doit pas dépasser 25 caractères',
            'nom.string'   => 'le nom doit contenir que des caractères',
            'prenom.required' => 'le prenom est obligatoire',
            'prenom.max'      => 'le prenom ne doit pas dépasser 25 caractères',
            'prenom.string'   => 'le prenom doit contenir que des caractères',
            'adresse.required' => 'veuillez renseigner votre sedrese',
            'ville.required' => 'veuillez renseigner votre ville',
        ];
    }
}
