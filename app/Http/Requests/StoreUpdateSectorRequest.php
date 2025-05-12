<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\HealthUnit;
use App\Models\Sector;
use Illuminate\Validation\Rule;


class StoreUpdateSectorRequest extends FormRequest
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
                // validar se é uma unidade de saude e se o tipo comporta o tipo do setor

        return [
            'name' => ['required', 'string', 'max:255', Rule::unique(Sector::class)->ignore($this->sector->healhUnit)],
            'description' => ['required', 'string', 'max:255'],
            'health_unit_id' => ['required', 'exists:'.HealthUnit::class.',id'],
            'type' => ['required', 'string', 'max:255'],
        ];
    }
}
