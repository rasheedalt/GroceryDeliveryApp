
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
              <a class="nav-item nav-link" href="{{ auth('customer')->user() ? route('cart.list') : '#' }}">
                <i class="fa fa-shopping-cart"></i>
                <strong>&nbsp; &nbsp; Cart</strong>
                <small class="text-danger">{{  auth('customer')->user() ? count( auth('customer')->user()->cart ) : ''}}</small>
              </a>

              @if(auth('customer')->user())
              <form id="logoutForm" action="{{ route('customer.logout') }}" method="post">
                @csrf
              </form>
                <a class="nav-item nav-link" href="#" onClick="$('#logoutForm').submit()">
                  <i class="fa fa-power-off" aria-hidden="true"></i>
                  <strong>&nbsp; &nbsp; Logout</strong>
                </a>
              @else
                <a class="nav-item nav-link" href="{{ route('customer.show_login') }}">
                  <i class="fa fa-sign-in" aria-hidden="true"></i>
                  <strong>&nbsp; &nbsp; Login</strong>
                </a>
              @endif
            </div>
          </div>
      </div>
    </nav>
    </header>

    <div class="container">
      @include('components.flash_message')
    </div>
    @yield('content')

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
