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
         "gender" => $request->gender,
         "user_image" => $request->image ?? "",
         "user_description" => $request->desc ?? "",
         "user_languages" => $request->lang ?? "",
         "user_skills" => $request->skill ?? null,
         "member_since" => $request->member ?? "2024-01-01",
         "certified" => $request->certif ?? null,
         "user_country" => $request->country ?? ""
      ]);


      if ($response->successful()) {
         return redirect('/service');
      } else {
         return $response->status();
      }
   }
}
