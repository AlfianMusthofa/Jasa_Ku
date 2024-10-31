<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
