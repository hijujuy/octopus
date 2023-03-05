<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\ConceptType;
use DateTime;

class ConceptTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ConceptType::create([
            'id' => 1,
            'description' => 'PRODUCTO',
            'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
            'date_to' => null
        ]);

        ConceptType::create([
            'id' => 2,
            'description' => 'SERVICIOS',
            'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
            'date_to' => null
        ]);

        ConceptType::create([
            'id' => 3,
            'description' => 'PRODUCTOS Y SERVICIOS',
            'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
            'date_to' => null
        ]);
    }
}
