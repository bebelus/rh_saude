<?php

namespace App\Http\Requests;

use App\Models\Collaborator;
use App\Models\Hourly;
use App\Models\Monthly;
use App\Models\Applicant;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateBondRequest extends FormRequest
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
            'collaborator_id' => ['required', 'exists:'.Collaborator::class.',id'],
            'monthly_id' => ['required_without:hourly_id','nullable', 'exists:'.Monthly::class.',id'],
            'hourly_id' => ['required_without:monthly_id','nullable', 'exists:'.Hourly::class.',id'],
            'applicant_id' => ['required', 'exists:'.Applicant::class.',id'],
            'start_date' => ['required', 'date'],
            'end_date' => [ 'date'],
            'hora_vinculo' => ['required', 'numeric'],
            'status' => ['required', 'string'],
        ];
    }
}
