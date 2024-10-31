<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
   function index()
   {
      return view('dashboard', [
         "title" => "Your Dashboard"
      ]);
   }

   function addProductPage()
   {
      return view('addProject', [
         "title" => session('username') . " | Create a new Project"
      ]);
   }

   function saveProduct(Request $request)
   {

      // dd($request->file('image')->store('post-images'));

      $response = Http::post('http://localhost:3000/gigs', [
         "user_id" => $request->user_id,
         "project_name" => $request->projectTitle,
         "industry" => $request->industry,
         "project_duration" => $request->duration,
         "project_cost" => $request->price,
         "project_description" => $request->description,
         "image" => $request->file('image')->store('post-images'),
         "phoneNumber" => $request->phoneNumber,
         "user_username" => $request->user_username,
         "user_description" => $request->user_description,
         "user_languages" => $request->user_languages,
         "user_location" => $request->user_location,
         "user_memberSince" => $request->user_memberSince
      ]);

      if ($response->successful()) {
         return redirect('/dashboard');
      } else {
         return $response->status();
      }
   }
}
