<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CurrencyType;
use DateTime;

class CurrencyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CurrencyType::create([
			'id' => 'PES',
			'description' => 'Pesos Argentinos',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => 'DOL',
			'description' => 'Dólar Estadounidense',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '002',
			'description' => 'Dólar Libre EEUU',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-16'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '007',
			'description' => 'Florines Holandeses',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '010',
			'description' => 'Pesos Mejicanos',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '011',
			'description' => 'Pesos Uruguayos',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '014',
			'description' => 'Coronas Danesas',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '015',
			'description' => 'Coronas Noruegas',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '016',
			'description' => 'Coronas Suecas',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '018',
			'description' => 'Dólar Canadiense',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '019',
			'description' => 'Yens',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '021',
			'description' => 'Libra Esterlina',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '023',
			'description' => 'Bolívar Venezolano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '024',
			'description' => 'Corona Checa',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '025',
			'description' => 'Dinar Yugoslavo',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '026',
			'description' => 'Dólar Australiano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '027',
			'description' => 'Dracma Griego',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '028',
			'description' => 'Florín (Antillas Holandesas)',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '029',
			'description' => 'Güaraní',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '031',
			'description' => 'Peso Boliviano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '032',
			'description' => 'Peso Colombiano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '033',
			'description' => 'Peso Chileno',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '034',
			'description' => 'Rand Sudafricano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '036',
			'description' => 'Sucre Ecuatoriano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '051',
			'description' => 'Dólar de Hong Kong',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '052',
			'description' => 'Dólar de Singapur',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '053',
			'description' => 'Dólar de Jamaica',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '054',
			'description' => 'Dólar de Taiwan',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '055',
			'description' => 'Quetzal Guatemalteco',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '056',
			'description' => 'Forint (Hungría)',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '057',
			'description' => 'Baht (Tailandia)',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '059',
			'description' => 'Dinar Kuwaiti',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '012',
			'description' => 'Real',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '030',
			'description' => 'Shekel (Israel)',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '035',
			'description' => 'Nuevo Sol Peruano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '060',
			'description' => 'Euro',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-03'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '040',
			'description' => 'Lei Rumano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '042',
			'description' => 'Peso Dominicano',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '043',
			'description' => 'Balboas Panameñas',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '044',
			'description' => 'Córdoba Nicaragüense',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '045',
			'description' => 'Dirham Marroquí',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '046',
			'description' => 'Libra Egipcia',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '047',
			'description' => 'Riyal Saudita',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '061',
			'description' => 'Zloty Polaco',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '062',
			'description' => 'Rupia Hindú',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '063',
			'description' => 'Lempira Hondureña',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '064',
			'description' => 'Yuan (Rep. Pop. China)',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-04-15'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '009',
			'description' => 'Franco Suizo',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2009-11-10'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '041',
			'description' => 'Derechos Especiales de Giro',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2010-01-25'),
			'date_to' => NULL
		]);
		CurrencyType::create([
			'id' => '049',
			'description' => 'Gramos de Oro Fino',
			'date_from' => DateTime::createFromFormat('Y-m-d', '2010-01-25'),
			'date_to' => NULL
        ]);
    }
}
