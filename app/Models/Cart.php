<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'customer_id',
        'product_id',
        'quantity',
        'isOrdered'
    ];

  public function customer(){
      return $this->belongsTo(Customer::class);
  }

  public function product(){
      return $this->belongsTo(Product::class);
  }
}
