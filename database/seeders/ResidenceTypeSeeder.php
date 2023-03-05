<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ResidenceType;

class ResidenceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ResidenceType::create(['description' => 'FISCAL']);
        ResidenceType::create(['description' => 'LEGAL/REAL']);
    }
}
