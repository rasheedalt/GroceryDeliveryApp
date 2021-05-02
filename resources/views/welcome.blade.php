@extends('layouts.main')

@section('content')
<main role="main">

  <!-- <section class="jumbotron text-center">
    <div class="container">
      <h1 class="jumbotron-heading">Album example</h1>
      <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
      <p>
        <a href="#" class="btn btn-primary my-2">Main call to action</a>
        <a href="#" class="btn btn-secondary my-2">Secondary action</a>
      </p>
    </div>
  </section> -->

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="{{ $product->image }}" height="338px" alt="Card image cap">
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
                <!-- <small class="text-muted">9 mins</small> -->
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>

</main>
@endsection
