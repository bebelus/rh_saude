<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\HealthUnit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sector>
 */
class SectorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $healthUnit = HealthUnit::all()->random();
        switch ($healthUnit->type) {
            case 'HOSPITAL':
                $type = fake()->randomElement(['24h', '12h']);
                break;
            case 'UPH':
                $type = fake()->randomElement(['24h', '12h']);
                break;
            case 'UPA':
                $type = fake()->randomElement(['24h', '12h']);
                break;
            case 'UBS':
                $type = fake()->randomElement(['PADRÃO', 'ESPECIAL']);
                break;
            case 'SMS':
                $type = fake()->randomElement(['PADRÃO', 'ESPECIAL']);
                break;
        }
        return [
            'id' => fake()->uuid(),
            'health_unit_id' => $healthUnit->id,
            'name' => fake()->name(),
            'description' => fake()->text(),
            'type' =>  $type,
        ];
    }
}
