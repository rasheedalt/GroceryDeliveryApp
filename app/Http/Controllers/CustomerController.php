<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Hash;
use App\Models\Customer;
use App\Http\Requests\CustomerSignupRequest;

class CustomerController extends Controller
{
  use AuthenticatesUsers;

  /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function showLoginform(){
      if(auth('customer')->user()){
        return redirect()->route('home');
      }
      return view('customer_auth.login');
    }

    public function login(Request $request){
      if(auth('customer')->user()){
        return redirect()->route('home');
      }
      $credentials = $request->only('email', 'password');

        if($this->guard()->attempt($credentials) ){
            $applicant = Customer::find($this->guard()->id());
            auth('web')->user() ? auth('web')->logout() : '';
            return redirect()->to(route('home'));

        }else{
            $this->flashErrorMessage(Lang::trans('auth.failed'));
            return back()->withInput() ;
        }
    }

    public function showSignUpform(){
      return view('customer_auth.sign_up');
    }

    public function register(CustomerSignupRequest $request){
      // return $request->all();
      $password = Hash::make($request->password);
      $customer = Customer::create([
              'firstname' => $request->firstname,
              'lastname' => $request->lastname,
              'email' => $request->email,
              'phone_no' => $request->phone,
              'password' => $password
          ]);
      Auth::login($customer);

      return redirect()->route('home');

    }

    public function logout(Request $request)
     {
         $this->guard()->logout();

         $request->session()->invalidate();

         return $this->loggedOut($request) ?: redirect()->route('home');
     }

     protected function guard()
     {
         return Auth::guard('customer');
     }

}
