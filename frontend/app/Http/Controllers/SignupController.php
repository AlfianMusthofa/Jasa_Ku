<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SignupController extends Controller
{
   function index(Request $request)
   {

      $response = Http::post('http://localhost:3000/users', [
         "username" => $request->username,
         "password" => $request->password,
         "phoneNumber" => $request->phonenumber,
         "dateBorn" => $request->date,
         "gender" => $request->gender
      ]);

      if ($response->successful()) {
         return redirect('/service');
      } else {
         return $response->status();
      }
   }
}
