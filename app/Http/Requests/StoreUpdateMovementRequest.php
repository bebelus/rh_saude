<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Collaborator;
use App\Models\Monthly;
use App\Models\Hourly;

class StoreUpdateMovementRequest extends FormRequest
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
            'user_id' => ['required', 'exists:'.User::class.',id'],
            'collaborator_name' => ['required', 'string', 'min: 10', 'max:255'],
            'name' => ['required', 'string', 'min: 10', 'max:255'],
            'telephone' => ['required', 'string', 'min: 10', 'max:255'],
            'hourly_id' => ['required', 'exists:'.Hourly::class.',id'],
            'monthly_id' => ['required', 'exists:'.Monthly::class.',id'],
        ];
    }
}
