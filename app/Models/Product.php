<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "category_id", "short_description", "long_description", "price", "status", "image", "quantity", "created_at"
    ];

    protected function realtionToCategory()
    {
        return $this->hasOne('App\Models\Category', 'id', 'category_id');
    }
}
