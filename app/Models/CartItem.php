<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'cart_id',
        'product_id'
    ];

  public function cart(){
      return $this->belongsTo(Cart::class);
  }
}
