<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contract;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hourly>
 */
class HourlyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array

    {
        $contract = Contract::where('status', '=','ATIVO')->get()->random();

        return [
            'id' => fake()->uuid(),
            'contract_id' => $contract->id,
            'name' => fake()->randomElement(['ENFERMEIRO(A)', 'MÉDICO(A)', 'DENTISTA', 'TEC_ENFERMAGEM', 
            'VETERINÁRIO(A)', 'FISIOTERAPEUTA', 'FONOAUDIÓLOGO(A)', 'PSICOLOGO(A)']),
            'tipo' => fake()->randomElement(['PLANTONISTA', 'ROTINA', 'COOORDENAÇÃO', 'DIREÇÃO', 'TÉCNICO', 'GERAL']),
            'horas_totais' => fake()->numerify('#####.##'),
            'horas_mensais' => fake()->numerify('####.##'),
            'salario_hora' => fake()->numerify('###.##'),
            'custo_hora' => fake()->numerify('###.##'),
            'horas_usadas' => fake()->numerify('####.##'),

        ];
    }
}
