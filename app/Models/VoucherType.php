<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Numeration;
use App\Models\Voucher;

class VoucherType extends Model
{
    use HasFactory;

    public function vouchers()
    {
        return $this->hasMany(Voucher::class);
    }

    public function numerations()
    {
        return $this->hasMany(Numeration::class);
    }
}
