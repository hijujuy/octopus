<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\IvaType;
use DateTime;

class IvaTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IvaType::create([
			'id' => 3,
			'description' => '0%',
            'value' => 0.0,
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-02-20'),
			'date_to' => NULL
		]);
		IvaType::create([
			'id' => 4,
			'description' => '10.5%',
            'value' => 10.5,
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-02-20'),
			'date_to' => NULL
		]);
		IvaType::create([
			'id' => 5,
			'description' => '21%',
            'value' => 21.0,
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-02-20'),
			'date_to' => NULL
		]);
		IvaType::create([
			'id' => 6,
			'description' => '27%',
            'value' => 27.0,
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-02-20'),
			'date_to' => NULL
		]);
		IvaType::create([
			'id' => 8,
			'description' => '5%',
            'value' => 5.0,
			'date_from' => DateTime::createFromFormat('Y-m-d', '2014-10-20'),
			'date_to' => NULL
		]);
		IvaType::create([
			'id' => 9,
			'description' => '2.5%',
            'value' => 2.5,
			'date_from' => DateTime::createFromFormat('Y-m-d', '2014-10-20'),
			'date_to' => NULL
        ]);
    }
}
