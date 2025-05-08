<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateMonthlyRequest extends FormRequest
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
            'contract_id' => ['required', 'exists:'.Contract::class.',id'],
            'name' => ['required', 'string', 'max:255', 'unique:'.Monthly::class],
            'tipo' => ['required', 'string'],
            'escala' => ['required', 'string'],
            'salario_base' => ['required', 'numeric'],
            'custo' => ['required', 'numeric'],
            'quantidade_postos' => ['required', 'numeric'],
        ];
    }
}
