<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    use HasFactory;

    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }
}
