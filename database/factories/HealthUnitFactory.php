<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HealthUnit>
 */
class HealthUnitFactory extends Factory
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
            'name' => fake()->company(),
            'cnes' => fake()->numerify('#######'),
            'type' => fake()->randomElement(['HOSPITAL', 'UPH', 'UPA', 'UBS', 'SMS']),
            'fantasia' => fake()->companySuffix(),
            'cnpj' => fake()->numerify('##.###.###/####-##'),
            'email' => fake()->unique()->safeEmail(),
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
