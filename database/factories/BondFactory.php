<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Collaborator;
use App\Models\Monthly;
use App\Models\Hourly;
use App\Models\Applicant;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bond>
 */
class BondFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $collaborators = Collaborator::whereDoesntHave('bonds')->get()->random();
        $applicants = Applicant::all()->random();
        $hourlies = Hourly::all()->random();
      //  $monthly = Monthly::all()->random();


        return [
            'id' => fake()->uuid(),
            'collaborator_id' => $collaborators->id,
            'applicant_id' => $applicants->id,
            //'monthly_id' => $monthly->id,
            'hourly_id' => $hourlies->id,
            'start_date' => fake()->date(),
            'end_date' => fake()->date(), 
            'status' => fake()->randomElement(['EM_ABERTO','ATIVO','DEMITIDO' ,'AVISO_PREVIO', 'INSS', 'LIC_MATERNIDADE', 'FÉRIAS']),
            'hora_vinculo' => fake()->numerify('##'),
        ];
    }
}
