<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
   function index(Request $request)
   {
      $credentials = $request->validate([
         'username' => 'required',
         'password' => 'required'
      ]);

      if (Auth::attempt($credentials)) {
         $request->session()->regenerate();

         return redirect()->intended('signup');
      }

      dd('Login gagal');
   }
}
