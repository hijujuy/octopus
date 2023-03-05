<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Numeration;

class SalePoint extends Model
{
    use HasFactory;

    public function numerations()
    {
        return $this->hasMany(Numeration::class);
    }
}
