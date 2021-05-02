@extends('layouts.main')

@section('content')
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
      @if(count($items) > 0)
        <table class="table table-bordered">
          <thead>
            <th>Item</th>
            <th>Name</th>
            <th>Price</th>
            <th>Qty</th>
            <th></th>
          </thead>
          @foreach($items as $item)
          @php $product = $item->product; @endphp
          <tr class="mb-3 pb-3">
              <th>
                <img class="" src="{{ $product->image }}" height="50px" width="50px" alt="Card image cap">
              </th>
              <th>
                {{ $product->display_name}}
              </th>
              <th> {{ $item->quantity }} </th>
              <th>$ {{ number_format($product->price, 2) * $item->quantity }}</th>
              <th> <a href="{{ route('cart.remove', $item) }}">Remove</a> </th>
          </tr>
          <!-- <div class="row">
            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="{{ $product->image }}" height="338px" alt="Card image cap">
              </div>
            </div>

            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <h4 class="text-center">{{ $product->display_name }}</h4>
                  <p class="card-text text-center">$ {{ number_format($product->price, 2) }}</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="text-center">
                      @php $isCustumer = auth('customer')->user() ? TRUE : FALSE; @endphp
                      <form class="" action="@if($isCustumer){{ route('cart.add_product') }}@else{{ route('customer.show_login') }}@endif" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-block">Add to Cart</button><br>
                        <input type="hidden" value="{{ auth('customer')->id() }}"  name="customer" class="form-control text-center"/>
                        <input type="hidden" value="{{ $product->id }}" name="product"  class="form-control text-center"/>
                        <input type="number" value="1" min="1" name="qty" class="form-control text-center">
                        <label>Quantity</label>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div> -->
          @endforeach

              <tr>
                <th>Total</th>
                <th></th>
                <th></th>
                <th colspan="3">$ {{ number_format($total) }}</th>
              </tr>
              <tbody>
                <td><a href="{{ route('cart.slots') }}" class="btn btn-block btn-primary">Check Out</a></td>
              </tbody>
            </table>

          </div>
      @else
        <p>No item in cart</p>
      @endif
    </div>
  </div>

</main>
@endsection
