<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sector;
use App\Models\Applicant;
use App\Models\Bond;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $bond = Bond::whereDoesntHave('works')->get()->random();
        $sector = Sector::all()->random();
        $applicant = Applicant::all()->random();
        return [
            'id' => fake()->uuid(),
            'bond_id' => $bond->id,
            'sector_id' => $sector->id,
            'applicant_id' => $applicant->id,
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'status' => fake()->randomElement([ 'ATIVO', 'EM_TRANSFERÊNCIA','INATIVO']),
        ];
    }
}
