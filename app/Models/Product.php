<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
      'display_name',
      'description',
      'image',
      'tag',
      'quantity',
      'discount',
      'price',
      'category_id',
      'available'
    ];
}
