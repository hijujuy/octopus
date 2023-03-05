<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Activity;
use App\Models\Category;
use App\Models\Component;

class MonotributeData extends Model
{
    use HasFactory;

    public function activity()
    {
        return $this->hasOne(Activity::class);
    }

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function components()
    {
        return $this->hasMany(Component::class);
    }

}
