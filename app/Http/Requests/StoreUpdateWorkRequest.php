<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Bond;
use App\Models\Sector;
use App\Models\Applicant;

class StoreUpdateWorkRequest extends FormRequest
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
            'bond_id' => ['required', 'exists:'.Bond::class.',id'],
            'sector_id' => ['required', 'exists:'.Sector::class.',id'],
            'applicant_id' => ['required', 'exists:'.Applicant::class.',id'],
            'start_date' => ['required', 'date'],
            'end_date' => [ 'date'],
            'status' => ['required', 'string'],
        ];
    }
}
