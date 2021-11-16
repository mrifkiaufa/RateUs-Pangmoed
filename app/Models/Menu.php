<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getImageAttribute($value)
    {
        return url("image/$value");
    }
}
