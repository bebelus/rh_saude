<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contract;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Monthly>
 */
class MonthlyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $contract = Contract::where('status', '=','Vencido')->get()->random();

        return [
            'id' => fake()->uuid(),
            'contract_id' => $contract->id,
            'name' => fake()->randomElement(['VIGIA', 'MAQUEIRO(A)', 'TELEFONISTA', 'PORTEIRO(A)', 
            'ASS_ADMINISTRATIVO', 'ELETRICISTA', 'ASG', 'MOTORISTA)', 'ASSESSOR_TÉCNICO']),
            'tipo' => fake()->randomElement(['DIARISTA', 'PLANTONISTA_24H','PLANTONISTA_NOTURNO', 'PLANTONISTA_DIURNO']),
            'escala' => fake()->randomElement(['40H','12x36', '24x72', '24x120']),
            'salario_base' => fake()->numerify('####.##'),
            'custo' => fake()->numerify('#####.##'),            
            'quantidade_postos' => fake()->numerify('###'),
        ];
    }
}
