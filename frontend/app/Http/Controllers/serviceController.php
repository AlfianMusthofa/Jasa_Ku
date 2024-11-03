<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class serviceController extends Controller
{
   function index()
   {

      $response = Http::get('http://localhost:3000/gigs');
      $products = $response->json();

      return view('service', [
         "title" => 'Jasaku | Aneka Jasa',
         "products" => $products
      ]);
   }
}
