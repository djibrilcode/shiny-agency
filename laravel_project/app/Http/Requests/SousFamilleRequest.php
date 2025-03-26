<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SousFamilleRequest extends FormRequest
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
            'libelle_sous_famille' => 'required|string',
            'image_sous_famille' => 'required',
        ];
    }

    public function messages():array
    {

        return [
            'libelle_sous_famille.' => 'le champ libéllé est ibligatoire',
            'image_sous_famille.required' => 'le champ image est obligatoire',
        ];
    }
}
