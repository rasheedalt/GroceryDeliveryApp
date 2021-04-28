@extends('layouts.customer_auth_layout')

@section('content')
    <form class="form-signin">

      <div class="text-center mb-4">
        <i class="fa fa-handshake-o fa-2x" aria-hidden="true"><strong> Grocery Delivery</strong> </i><br>
        <!-- <h1 class="h3 mb-3 font-weight-normal">Login</h1> -->
        <!-- <p>Login</p> -->
      </div>
      <div class="border p-4">
        <h1 class="h3 mb-3 font-weight-normal text-center">Login</h1>

        <div class="form-label-group">
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputEmail">Email address</label>
        </div>

        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <label for="inputPassword">Password</label>
        </div>

        <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button><br>

        <a class="pt-4" href="{{ route('customer.show_signup') }}">Sign Up</a>

      </div>

      <p class="mt-5 mb-3 text-muted text-center">&copy; {{ Date('Y') }}</p>
    </form>
@endsection
