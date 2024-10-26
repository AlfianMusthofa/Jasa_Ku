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

         $userData = $response->json();

         if (isset($userData['user']['username']) || isset($userData['user']['id'])) {
            $request->session()->put('username', $userData['user']['username']);
            $request->session()->put('id', $userData['user']['id']);
         }

         return redirect('/service');
      } else {
         return $response->status();
      }
   }
}
