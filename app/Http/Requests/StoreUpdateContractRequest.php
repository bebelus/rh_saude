<?php

namespace App\Http\Requests;

use App\Models\Enterprise;
use App\Models\Contract;
use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContractRequest extends FormRequest
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
            'contract_number' => ['required', 'string', 'max:255',Rule::unique(Contract::class)->ignore($this->contract)],
            'enterprise_id' => ['required', 'exists:'.Enterprise::class.',id'],
            'total_value' => ['required', 'numeric'],
            'start_date' => ['required', 'date'],
            'end_date' => ['nullable', 'date'],
            'teto_mensal' => ['required', 'numeric'],
            'status' => ['required', 'string'],
            'description' => ['required', 'string' ],

        ];
    }
}
