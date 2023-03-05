<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\KeyState;

class KeyStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KeyState::create(['description' => 'ACTIVO']);
        KeyState::create(['description' => 'INACTIVO']);
    }
}
