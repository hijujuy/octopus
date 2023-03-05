<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Taxpayer;

class Delegation extends Model
{
    use HasFactory;

    public function taxpayers()
    {
        return $this->hasMany(Taxpayer::class);
    }
}
