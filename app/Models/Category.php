<?php

namespace App\Models;
use App\Models\Item;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function items()
    {
        return $this->hasMany(Items::class);
    }
}
