@extends('layouts.customer_auth_layout')

@section('content')
    <form class="form-signin">

      <div class="text-center mb-4">
        <i class="fa fa-handshake-o fa-2x" aria-hidden="true"><strong>Grocery Delivery</strong> </i><br>
        <!-- <h1 class="h3 mb-3 font-weight-normal">Login</h1> -->
        <!-- <p>Login</p> -->
      </div>
      <div class="border p-4">
        <h1 class="h3 mb-3 font-weight-normal text-center"> Sign Up</h1>

        <div class="form-label-group">
          <input type="text" id="inputEmail" class="form-control" placeholder="First Name" required autofocus>
          <label for="inputEmail">First Name <span class="text-danger">*</span></label>
        </div>

        <div class="form-label-group">
          <input type="text" id="inputPassword" class="form-control" placeholder="Last Name" required>
          <label for="inputPassword">Last Name  <span class="text-danger">*</span></label>
        </div>

        <div class="form-label-group">
          <input type="text" id="inputPassword" class="form-control" placeholder="Last Name" required>
          <label for="inputPassword">Phone No  <span class="text-danger">*</span></label>
        </div>

        <div class="form-label-group">
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputEmail">Email address  <span class="text-danger">*</span></label>
        </div>

        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <label for="inputPassword">Password</label>
        </div>

        <div class="form-label-group">
          <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
          <label for="inputPassword">Confirm Password</label>
        </div>

        <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button><br>

        <a class="pt-4" href="{{ route('customer.show_login') }}">Login</a>

      </div>

      <p class="mt-5 mb-3 text-muted text-center">&copy; {{ Date('Y') }}</p>
    </form>
@endsection
