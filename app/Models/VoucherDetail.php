<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\IvaType;
use App\Models\TributeType;

class VoucherDetail extends Model
{
    use HasFactory;

    public function ivaType()
    {
        return $this->belongsTo(IvaType::class);
    }

    public function tributeType()
    {
        return $this->belongsTo(TributeType::class);
    }
}
