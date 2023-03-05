<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\AdditionalDataType;
use App\Models\ResidenceType;

class TaxResidence extends Model
{
    use HasFactory;

    public function additionalDataType()
    {
        return $this->belongsTo(AdditionalDataType::class);
    }

    public function residenceType()
    {
        return $this->belongsTo(ResidenceType::class);
    }
}
