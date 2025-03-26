<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilleRequest extends FormRequest
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
            'libelle' => 'required|string',
            'image' => 'required'
        ];
    }

    // public function messages():array
    // {
    //     return [
    //         'libelle.required' => 'le champ libellé est obligatoire',
    //         'libelle.string' => 'le champ libelle ne doit contenir aucun caratère ou symbole',
    //         'image.required' => 'le champ image est obligatoire'
    //     ];
    // }
}
