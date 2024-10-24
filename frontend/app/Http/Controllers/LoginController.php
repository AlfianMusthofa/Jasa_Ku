<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
   function index(Request $request)
   {
      $response = Http::post('http://localhost:3000/users/login', [
         "username" => $request->username,
         "password" => $request->password
      ]);

      if ($response->successful()) {
         return redirect('/service');
      } else {
         return $response->status();
      }
   }
}
