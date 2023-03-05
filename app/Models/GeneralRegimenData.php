<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tax;
use App\Models\Category;
use App\Models\Regime;
use App\Models\Activity;

class GeneralRegimenData extends Model
{
    use HasFactory;

    public function taxes()
    {
        return $this->hasMany(Tax::class);
    }

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function regimes()
    {
        return $this->hasMany(Regime::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

}
