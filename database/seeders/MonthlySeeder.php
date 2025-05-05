<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Monthly;

class MonthlySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Monthly::factory(60)->create();
    }
}
