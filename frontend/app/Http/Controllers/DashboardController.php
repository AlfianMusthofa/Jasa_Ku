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

      ddd($request);

      $response = Http::post('http://localhost:3000/gigs', [
         "user_id" => $request->user_id,
         "project_name" => $request->projectTitle,
         "industry" => $request->industry,
         "project_duration" => $request->duration,
         "project_cost" => $request->price,
         "project_description" => $request->description,
         "image" => $request->image,
         "phoneNumber" => $request->phoneNumber
      ]);
   }
}
