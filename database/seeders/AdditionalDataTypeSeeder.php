<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\AdditionalDataType;

class AdditionalDataTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdditionalDataType::create(['description' => 'BARRIO']);
        AdditionalDataType::create(['description' => 'PARAJE']);
        AdditionalDataType::create(['description' => 'NO DETERMINADO']);
        AdditionalDataType::create(['description' => 'ESTATEFA']);
        AdditionalDataType::create(['description' => 'ENTRE CALLES']);
        AdditionalDataType::create(['description' => 'ESQUINA']);
        AdditionalDataType::create(['description' => 'SITIO WEB']);
    }
}
