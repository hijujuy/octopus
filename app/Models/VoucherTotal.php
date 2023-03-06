<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\IvaType;
use App\Models\TributeType;

class VoucherTotal extends Model
{
    use HasFactory;

    public function ivaTypes()
    {
        return $this->belongsToMany(IvaType::class);
    }

    public function tributeTypes()
    {
        return $this->belongsToMany(TributeType::class);
    }
}
