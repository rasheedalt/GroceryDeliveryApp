
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Grocery Delivery</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/album.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.0/jquery.min.js" ></script>
  </head>

  <body>

    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark box-shadow">
        <div class="container">
          <a class="navbar-brand" href="/">
            <i class="fa fa-handshake-o fa-2x" aria-hidden="true"> Grocery Delivery</i>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" style="margin-left: 50%;" id="navbarNavAltMarkup">
            <div class="navbar-nav d-flex align-items-center">
              <a class="nav-item nav-link" href="#">
                <i class="fa fa-shopping-cart"></i>
                <strong>&nbsp; &nbsp; Cart</strong>
              </a>

              @if(auth('customer')->user())
                <a class="nav-item nav-link" href="#">
                  <i class="fa fa-power-off" aria-hidden="true"></i>
                  <strong>&nbsp; &nbsp; Logout</strong>
                </a>
              @else
                <a class="nav-item nav-link" href="{{ route('customer.login') }}">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                  <strong>&nbsp; &nbsp; Login</strong>
                </a>
              @endif
            </div>
          </div>
      </div>
    </nav>
    </header>

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
                      <button type="button" class="btn btn-block">Add to Cart</button><br>
                      <input type="number" value="1" min="1" class="form-control text-center">
                      <label>Quantity</label>
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

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a href="../../getting-started/">getting started guide</a>.</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/cjs/popper.min.js"></script> -->
  </body>
</html>
