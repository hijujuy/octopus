<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\DocumentType;
use DateTime;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocumentType::create([
			'id' => 80,
			'description' => "CUIT",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 86,
			'description' => "CUIL",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 87,
			'description' => "CDI",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 89,
			'description' => "LE",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 90,
			'description' => "LC",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 91,
			'description' => "CI Extranjera",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 92,
			'description' => "en trámite",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 93,
			'description' => "Acta Nacimiento",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 95,
			'description' => "CI Bs. As. RNP",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 96,
			'description' => "DNI",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 94,
			'description' => "Pasaporte",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 0,
			'description' => "CI Policía Federal",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 1,
			'description' => "CI Buenos Aires",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 2,
			'description' => "CI Catamarca",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 3,
			'description' => "CI Córdoba",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-25'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 4,
			'description' => "CI Corrientes",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 5,
			'description' => "CI Entre Ríos",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 6,
			'description' => "CI Jujuy",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 7,
			'description' => "CI Mendoza",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 8,
			'description' => "CI La Rioja",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 9,
			'description' => "CI Salta",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 10,
			'description' => "CI San Juan",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 11,
			'description' => "CI San Luis",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 12,
			'description' => "CI Santa Fe",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 13,
			'description' => "CI Santiago del Estero",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 14,
			'description' => "CI Tucumán",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 16,
			'description' => "CI Chaco",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 17,
			'description' => "CI Chubut",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 18,
			'description' => "CI Formosa",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 19,
			'description' => "CI Misiones",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 20,
			'description' => "CI Neuquén",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 21,
			'description' => "CI La Pampa",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 22,
			'description' => "CI Río Negro",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 23,
			'description' => "CI Santa Cruz",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 24,
			'description' => "CI Tierra del Fuego",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
		]);
		DocumentType::create([
			'id' => 99,
			'description' => "Doc. (Otro)",
			'date_from' => DateTime::createFromFormat('Y-m-d', '2008-07-28'),
			'date_to'=> NULL
        ]);
    }
}
