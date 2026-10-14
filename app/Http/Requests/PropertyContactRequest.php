<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class PropertyContactRequest extends FormRequest
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
            'nom'=>['required', 'string', 'min:2'],
            'prenom'=>['required', 'string', 'min:2'],
            'numero_de_telephone'=>['required', 'string', 'min:10'],
            'email'=>['required', 'email', 'min:4'],
            'message'=>['required','string', 'min:4']
        ];
    }
}
