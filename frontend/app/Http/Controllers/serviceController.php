<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class serviceController extends Controller
{
   function index()
   {
      return view('service', [
         "title" => 'Jasaku | Aneka Jasa'
      ]);
   }
}
