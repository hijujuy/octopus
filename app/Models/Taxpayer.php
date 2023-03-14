<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TaxResidence;
use App\Models\MonotributeData;
use App\Models\GeneralRegimeData;
use App\Models\Delegation;
use App\Models\KeyState;
use App\Models\KeyType;
use App\Models\SalePoint;
use App\Models\DocumentType;

class Taxpayer extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'business_name',
        'document_type_id',
        'person_id',
    ];

    public function delegation()
    {
        return $this->belongsTo(Delegation::class);
    }

    public function keyState()
    {
        return $this->belongsTo(KeyState::class);
    }

    public function keyType()
    {
        return $this->belongsTo(KeyType::class);
    }

    public function personType()
    {
        return $this->belongsTo(PersonType::class);
    }

    public function taxResidence()
    {
        return $this->hasOne(TaxResidence::class);
    }

    public function monotributeData()
    {
        return $this->hasOne(MonotributeData::class);
    }

    public function generalRegimeData()
    {
        return $this->hasOne(GeneralRegimenData::class);
    }

    public function salePoints()
    {
        return $this->hasMany(SalePoint::class);
    }

    public function documentType()
    {
        return $this->belongsTo(DocumentType::class);
    }


}
