<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Enterprise;
use Illuminate\Validation\Rule;

class StoreUpdateEnterpriseRequest extends FormRequest
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
            'razao_social' => ['required', 'string', 'max:255', Rule::unique(Enterprise::class)->ignore($this->enterprise)],
            'cnpj' => ['required', 'string', 'max:255',Rule::unique(Enterprise::class)->ignore($this->enterprise)],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255',Rule::unique(Enterprise::class)->ignore($this->enterprise)],
            'phone' => ['required', 'string', 'max:255'],
            'cellphone' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'complement' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:255'],
            'cep' => ['required', 'string', 'max:255'], 
            'fantasia' => ['required', 'string', 'max:255'],

        ];
    }
}
