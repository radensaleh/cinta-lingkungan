<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class LoginController extends Controller
{
  public function show_login(){
    return view('login');
  }
  public function doLogin(){

    $auth = auth()->guard('webAdmin');
    $credentials = [
      'email'     => Input::get('email'),
      'password' => Input::get('password'),
    ];


    if( $auth->attempt($credentials) ){
        return response()->json([
          'error' => 0,
          'message' => 'Login Success'
        ], 200);
    }else{
        return response()->json([
          'error' => 1,
          'message' => 'Wrong Email or Password'
        ], 200);
    }
  }
}
