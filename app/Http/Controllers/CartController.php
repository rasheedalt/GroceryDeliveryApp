<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Cart;
use App\Models\DeliverySlot;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:customer');
    }

    public function add(Request $request){
      $product = Product::find($request->product);
      $customer = auth('customer')->user();
      $quantity = $request->qty;
      CartController::addProductToCart($product, $customer, $quantity);
      $this->flashSuccessMessage('Item added to cart');
      return back();
    }

    public function remove(Cart $cart){
      if($cart->customer_id == auth('customer')->id()){
        $cart->delete();
      }
      return back();
    }

    public function list(){
      $items = auth('customer')->user()->cart;
      $total = CartController::getTotalCartItemsPrice($items);

      return view('cart.cart_items', compact('items', 'total'));
    }

    public static function getTotalCartItemsPrice($items = null){
      $items = $items ?? auth('customer')->user()->cart;
      $total = 0;
      foreach ($items as $item) {
        $total+= $item->product->price * $item->quantity;
      }
      return $total;
    }

    public static function addProductToCart(Product $product, Customer $customer, int $quantity = 1){
      $cart = Cart::where('customer_id', $customer->id)->where('product_id', $product->id)->first();
      if(!$cart){
        $cart = Cart::create([
                'customer_id' => $customer->id,
                'product_id' => $product->id,
                'quantity' => $quantity
              ]);
      }else{
        $newQty = $cart->quantity + $quantity;
        $cart->update(['quantity' => $newQty]);
      }

      return $cart;
    }

    public function showDeliverySlots(){
      $slots = DeliverySlot::all();

      return view('cart.delivery_slots', compact('slots'));
    }

    public function orderPreview(DeliverySlot $slot){
      $items = auth('customer')->user()->cart;
      $total = CartController::getTotalCartItemsPrice($items);

      return view('cart.order_preview', compact('slot', 'items', 'total') );
    }
}
