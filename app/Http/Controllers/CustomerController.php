<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showLoginform(){
      return view('customer_auth.login');
    }

    public function login(Request $request){
      return view('customer_auth.login');
    }

    public function showSignUpform(){
      return view('customer_auth.sign_up');
    }
}
