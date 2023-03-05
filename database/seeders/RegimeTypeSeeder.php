<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\RegimeType;

class RegimeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RegimeType::create(['regime_type' => 1, 'regime_description' => 'RETENCION']);
        RegimeType::create(['regime_type' => 2, 'regime_description' => 'PERCEPCION']);
        RegimeType::create(['regime_type' => 3, 'regime_description' => 'REGIMEN EXCEPCIONAL DE INGRESO']);
        RegimeType::create(['regime_type' => 4, 'regime_description' => 'NO RETENCION']);
        RegimeType::create(['regime_type' => 5, 'regime_description' => 'PAGO A CUENTA']);
        RegimeType::create(['regime_type' => 6, 'regime_description' => 'CONVENIO CORRESPONSAB.GREMIAL']);
        RegimeType::create(['regime_type' => 7, 'regime_description' => 'PAGO UNICO Y DEFINITIVO']);
        RegimeType::create(['regime_type' => 8, 'regime_description' => 'PERCEP. NO COMP. DET. DE ANT.']);
        RegimeType::create(['regime_type' => 9, 'regime_description' => 'PERCEP. COMP. COMO CRED. FISCAL']);
    }
}
