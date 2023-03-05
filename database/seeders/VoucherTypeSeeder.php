<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\VoucherType;

class VoucherTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        VoucherType::create(['code' => 1,   'string_code' => '001', 'voucher_type' => 'Factura A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 2,   'string_code' => '002', 'voucher_type' => 'Nota de Débito A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 3,   'string_code' => '003', 'voucher_type' => 'Nota de Crédito A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 6,   'string_code' => '006', 'voucher_type' => 'Factura B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 7,   'string_code' => '007', 'voucher_type' => 'Nota de Débito B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 8,   'string_code' => '008', 'voucher_type' => 'Nota de Crédito B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 4,   'string_code' => '004', 'voucher_type' => 'Recibos A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 5,   'string_code' => '005', 'voucher_type' => 'Notas de Venta al contado A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 9,   'string_code' => '009', 'voucher_type' => 'Recibos B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 10,  'string_code' => '010', 'voucher_type' => 'Notas de Venta al contado B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 63,  'string_code' => '063', 'voucher_type' => 'Liquidacion A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 64,  'string_code' => '064', 'voucher_type' => 'Liquidacion B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 34,  'string_code' => '034', 'voucher_type' => 'Cbtes. A del Anexo I, Apartado A,inc.f),R.G.Nro. 1415', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 35,  'string_code' => '035', 'voucher_type' => 'Cbtes. B del Anexo I,Apartado A,inc. f),R.G. Nro. 1415', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 39,  'string_code' => '039', 'voucher_type' => 'Otros comprobantes A que cumplan con R.G.Nro. 1415', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 40,  'string_code' => '040', 'voucher_type' => 'Otros comprobantes B que cumplan con R.G.Nro. 1415', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 60,  'string_code' => '060', 'voucher_type' => 'Cta de Vta y Liquido prod. A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 61,  'string_code' => '061', 'voucher_type' => 'Cta de Vta y Liquido prod. B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 11,  'string_code' => '011', 'voucher_type' => 'Factura C', 'voucher_class' => 'C']);
        VoucherType::create(['code' => 12,  'string_code' => '012', 'voucher_type' => 'Nota de Débito C', 'voucher_class' => 'C']);
        VoucherType::create(['code' => 13,  'string_code' => '013', 'voucher_type' => 'Nota de Crédito C', 'voucher_class' => 'C']);
        VoucherType::create(['code' => 15,  'string_code' => '015', 'voucher_type' => 'Recibo C', 'voucher_class' => 'C']);
        VoucherType::create(['code' => 49,  'string_code' => '049', 'voucher_type' => 'Comprobante de Compra de Bienes Usados a Consumidor Final', 'voucher_class' => '']);
        VoucherType::create(['code' => 51,  'string_code' => '051', 'voucher_type' => 'Factura M', 'voucher_class' => 'M']);
        VoucherType::create(['code' => 52,  'string_code' => '052', 'voucher_type' => 'Nota de Débito M', 'voucher_class' => 'M']);
        VoucherType::create(['code' => 53,  'string_code' => '053', 'voucher_type' => 'Nota de Crédito M', 'voucher_class' => 'M']);
        VoucherType::create(['code' => 54,  'string_code' => '054', 'voucher_type' => 'Recibo M', 'voucher_class' => 'M']);
        VoucherType::create(['code' => 201, 'string_code' => '201', 'voucher_type' => 'Factura de Crédito electrónica MiPyMEs (FCE) A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 202, 'string_code' => '202', 'voucher_type' => 'Nota de Débito electrónica MiPyMEs (FCE) A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 203, 'string_code' => '203', 'voucher_type' => 'Nota de Crédito electrónica MiPyMEs (FCE) A', 'voucher_class' => 'A']);
        VoucherType::create(['code' => 206, 'string_code' => '206', 'voucher_type' => 'Factura de Crédito electrónica MiPyMEs (FCE) B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 207, 'string_code' => '207', 'voucher_type' => 'Nota de Débito electrónica MiPyMEs (FCE) B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 208, 'string_code' => '208', 'voucher_type' => 'Nota de Crédito electrónica MiPyMEs (FCE) B', 'voucher_class' => 'B']);
        VoucherType::create(['code' => 211, 'string_code' => '211', 'voucher_type' => 'Factura de Crédito electrónica MiPyMEs (FCE) C', 'voucher_class' => 'C']);
        VoucherType::create(['code' => 212, 'string_code' => '212', 'voucher_type' => 'Nota de Débito electrónica MiPyMEs (FCE) C', 'voucher_class' => 'C']);
        VoucherType::create(['code' => 213, 'string_code' => '213', 'voucher_type' => 'Nota de Crédito electrónica MiPyMEs (FCE) C', 'voucher_class' => 'C']);
    }
}
