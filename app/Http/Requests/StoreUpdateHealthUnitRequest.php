<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\HealthUnit;

class StoreUpdateHealthUnitRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:'.HealthUnit::class],
            'cnes' => ['required', 'string', 'max:255', 'unique:'.HealthUnit::class],
            'cnpj' => ['required', 'string', 'max:255', 'unique:'.HealthUnit::class],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.HealthUnit::class],
            'phone' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'complement' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'cep' => ['required', 'string', 'max:255'], 
            'type' => ['required', 'string', 'max:255'],
            'fantasia' => ['required', 'string', 'max:255'],
        ];
    }
}
