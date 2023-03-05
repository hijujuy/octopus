<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\TributeType;
use DateTime;

class TributeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TributeType::create([
			'id' => 1,
			'description' => 'Impuestos nacionales',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 2,
			'description' => 'Impuestos provinciales',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 3,
			'description' => 'Impuestos municipales',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 4,
			'description' => 'Impuestos Internos',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 99,
			'description' => 'Otro',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2010-09-17'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 5,
			'description' => 'IIBB',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2017-07-19'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 6,
			'description' => 'Percepción de IVA',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2017-07-19'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 7,
			'description' => 'Percepción de IIBB',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2017-07-19'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 8,
			'description' => 'Percepciones por Impuestos Municipales',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2017-07-19'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 9,
			'description' => 'Otras Percepciones',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2017-07-19'),
			'date_to' => NULL
		]);
		TributeType::create([
			'id' => 13,
			'description' => 'Percepción de IVA a no Categorizado',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2017-07-19'),
			'date_to' => NULL
		]);
    }
}
