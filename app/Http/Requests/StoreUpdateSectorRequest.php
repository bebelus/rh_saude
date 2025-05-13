<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\HealthUnit;
use App\Models\Sector;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\Builder;


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
       // $outros_setores = Sector::where('health_unit_id','=', $this->health_unit_id)->get();
        return [
            'name' => ['required', 'string', 'max:50'],
            //pesquisar formar do nome ser único por setor e unidade... tentar ->ignore($this->sector)  -  Rule::unique('sector')->where(fn (Builder $query) => $query->where('health_unit_id', $this->health_unit_id))
            'description' => ['required', 'string', 'max:255'],
            'health_unit_id' => ['required', 'exists:'.HealthUnit::class.',id'],
            'type' => ['required', 'string', 'max:255'],
        ];
    }
}
