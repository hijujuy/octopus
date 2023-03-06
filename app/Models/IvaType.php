<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\VoucherTotal;

class IvaType extends Model
{
    use HasFactory;

    public function voucherTotals()
    {
        return $this->belongsToMany(VoucherTotal::class);
    }
}
