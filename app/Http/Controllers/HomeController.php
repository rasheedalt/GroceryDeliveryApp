<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function index(){
      $products = Product::inRandomOrder()->paginate(10);

      return view('welcome', compact('products'));
    }
}
