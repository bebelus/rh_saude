<?php

namespace App\Http\Requests;

use App\Models\Collaborator;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCollaboratorRequest extends FormRequest
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
            'name' => ['required', 'string',  'max:255'],
            'email' => ['required', 'string',  'max:255','email', Rule::unique(Collaborator::class)->ignore($this->collaborator)],
            'cpf' => ['required', 'string', 'max:255',Rule::unique(Collaborator::class)->ignore($this->collaborator)],
            'rg' => [ 'string', 'max:30','nullable'],
            'birth' => ['required','string' ],
            'sex' => [ 'required', 'string', 'min: 1', 'max:1'],
            'phone' => [ 'string',  'max:30', 'nullable'],
            'cellphone' => ['required','string',  'max:30'],
            'address' => [ 'required','string',  'max:255'],
            'number' => [ 'required','string', 'min: 1', 'max:5'],
            'complement' => [ 'string',  'max:100', 'nullable'],
            'city' => ['required', 'string',  'max:30'],
            'state' => [ 'required', 'string', 'min: 2', 'max:2'],
            'cep' => [ 'required','string','max:15'],

        ];
    }
}
