<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TaxResidence;

class ResidenceType extends Model
{
    use HasFactory;

    public function taxResidences()
    {
        return $this->hasMany(TaxResidence::class);
    }
}
