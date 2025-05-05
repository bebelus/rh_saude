<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movement>
 */
class MovementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => fake()->uuid(),
            'user_id' => User::factory(),
            'date' => fake()->date(),
            'collaborator_name' => fake()->name(),
            'applicant_name' => fake()->name(),
            'function_name' => fake()->jobTitle(),
            'type' => fake()->randomElement([ 'NOVA_CONTRATAÇÃO','SUBSTITUIÇÃO','DESLIGAMENTO', 
            'TRANSFERÊNCIA_LOCAL', 'MUDANÇA_DE_FUNÇÃO', 'MUDANÇA_DE_CARGA_HORÁRIA','CANCELAMENTO']),
            'description' => fake()->text(),

        ];
    }
}
