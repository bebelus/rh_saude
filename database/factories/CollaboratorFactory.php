<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Collaborator>
 */
class CollaboratorFactory extends Factory
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
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'cpf' => fake()->unique()->numerify('###.###.###-##'),
            'rg' => fake()->unique()->numerify('##.###.###-#'),
            'birth' => fake()->date(),
            'sex' => fake()->randomElement(['M', 'F']),
            'phone' => fake()->phoneNumber(),
            'cellphone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'number' => fake()->buildingNumber(),
            'complement' => fake()->secondaryAddress(),
            'city' => fake()->city(),            
            'state' => fake()->state(),            
            'cep' => fake()->postcode(),            
        ];
    }
}
