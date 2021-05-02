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
            <!-- <th></th> -->
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
              <!-- <th> <a href="{{ route('cart.remove', $item) }}">Remove</a> </th> -->
          </tr>

          @endforeach

              <tr>
                <th>Total</th>
                <th></th>
                <th></th>
                <th colspan="3">$ {{ number_format($total) }}</th>
              </tr>
              <tr>
                <th>Delivery Slot</th>
                <th>{{ $slot->name }}</th>
                <th></th>
                <th></th>
              </tr>
              <tbody>
                <td><a href="#" class="btn btn-block btn-primary">Proceed to Payment</a></td>
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
