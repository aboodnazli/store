<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'quantity', 'category_id', 'description'];

    public function category()
{
    return $this->belongsTo(Category::class, 'category_id');
}

}

