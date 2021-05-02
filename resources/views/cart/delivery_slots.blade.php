@extends('layouts.main')

@section('content')
<main role="main">

  <div class="album py-5 bg-light">
    <div class="container">
      @if(count($slots) > 0)
          @foreach($slots as $slot)
          <div class="row">

            <div class="col-md-6">
              <div class="card mb-4 box-shadow">
                <div class="card-body">
                  <h4 class="text-center">{{ $slot->name }}</h4>
                  <p class="card-text text-center">{{ $slot->description }}</p>
                  <div class="d-flex justify-content-center align-items-center">
                    <div class="text-center">
                      <a href="{{ route('cart.preview', $slot) }}" class="btn btn-primary">Select</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          @endforeach
      @else
        <p>No delivery slot available</p>
      @endif
    </div>
  </div>

</main>
@endsection
