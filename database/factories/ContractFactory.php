<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Enterprise;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contract>
 */
class ContractFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $enterprise = Enterprise::all()->random();
        return [
            'id' => fake()->uuid(),
            'enterprise_id' => $enterprise->id,
            'contract_number' => fake()->numerify('##########'),
            'description' => fake()->sentence(),
            'total_value' => fake()->numerify('########.##'),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'teto_mensal' => fake()->numerify('########.##'),
            'status' => fake()->randomElement(['Vigente', 'Vencido', 'Inativo' ]),];
    }

    
}

