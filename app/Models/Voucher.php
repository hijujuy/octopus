<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\VoucherType;
use App\Models\SalePoint;

class Voucher extends Model
{
    use HasFactory;

    public function voucherType()
    {
        return $this->hasOne(VoucherType::class);
    }

    public function salePoint()
    {
        return $this->hasOne(SalePoint::class);
    }

}
