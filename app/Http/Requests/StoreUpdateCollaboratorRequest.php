<?php

namespace App\Http\Requests;

use App\Models\Collaborator;

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
            'email' => ['required', 'string',  'max:255','email', 'unique:'.Collaborator::class],
            'cpf' => ['required', 'string', 'max:255','unique:'.Collaborator::class],
            'rg' => [ 'string', 'max:30'],
            'birth' => [ 'string' ],
            'sex' => [ 'required', 'string', 'min: 1', 'max:1'],
            'phone' => [ 'required', 'string',  'max:30'],
            'cellphone' => [ 'string',  'max:30'],
            'address' => [ 'string',  'max:255'],
            'number' => [ 'string', 'min: 1', 'max:5'],
            'complement' => [ 'string',  'max:100'],
            'city' => [ 'string',  'max:30'],
            'state' => [ 'string', 'min: 2', 'max:2'],
            'cep' => [ 'string',  'max:15'],
            'applicant' => [ 'boolean'],

        ];
    }
}
