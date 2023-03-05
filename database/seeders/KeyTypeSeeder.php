<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\KeyType;

class KeyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KeyType::create(['description' => 'CUIT']);
        KeyType::create(['description' => 'CUIL']);
        KeyType::create(['description' => 'CDI']);
    }
}
