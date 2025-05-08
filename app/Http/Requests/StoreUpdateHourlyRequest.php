<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Contract;
use App\Models\Hourly;

class StoreUpdateHourlyRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255', 'unique:'.Hourly::class],
            'tipo' => ['required', 'string'],
            'horas_totais' => ['required', 'numeric'],
            'horas_mensais' => ['required', 'numeric'],
            'salario_hora' => ['required', 'numeric'],
            'custo_hora' => ['required', 'numeric'],
            'horas_usadas' => ['required', 'numeric'],
        ];
    }
}
