<?php

namespace App\Http\Requests\Admin;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PropertyfromRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'titre' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
            'surface' => ['required', 'integer' ],
            'chambre'=>  ['required', 'integer'],
            'nbre_de_piece'=> ['required', 'integer'],
            'etage'=> ['required', 'integer' ],
            'prix'=>  ['required', 'integer'],
            'ville'=>  ['required', 'min:1'],
            'adresse'=> ['required', 'min:8'],
            'code_postal'=> ['required'],
            'vendu'=> ['required', 'boolean'],
       'options'   => ['array', 'required'],
'options.*' => ['exists:options,id'],
        ];
    }
}
