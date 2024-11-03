<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
   function index($id)
   {
      $response = Http::get('http://localhost:3000/gigs/projectDetail/' . $id);
      $project = $response->json();

      return view('productPage', [
         "title" => "Product Page",
         "project" => $project
      ]);
   }

   function productDetail($id)
   {

      $response = Http::get('http://localhost:3000/gigs/projectDetail/' . $id);
      $project = $response->json();

      return view('productDetail', [
         "title" => "Product Detail",
         "project" => $project
      ]);
   }
}
