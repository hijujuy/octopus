<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\VoucherType;
use App\Models\SalePoint;
use App\Models\ConceptType;
use App\Models\VoucherDetail;
use App\Models\VoucherTotal;
use App\Models\CurrencyType;

class Voucher extends Model
{
    use HasFactory;

    public function voucherType()
    {
        return $this->belongsTo(VoucherType::class);
    }

    public function salePoint()
    {
        return $this->belongsTo(SalePoint::class);
    }

    public function conceptType()
    {
        return $this->belongsTo(ConceptType::class);
    }

    public function details()
    {
        return $this->hasMany(VoucherDetail::class);
    }

    public function total()
    {
        return $this->hasOne(VoucherTotal::class);
    }

    public function currencyType()
    {
        return $this->belongsTo(CurrencyType::class);
    }
}
