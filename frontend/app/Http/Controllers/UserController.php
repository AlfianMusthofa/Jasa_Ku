<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class UserController extends Controller
{
   function getUsers()
   {

      $client = new Client();
      $apiUrl = 'http://localhost:3000/users';

      try {

         $response = $client->get($apiUrl);
         $data = json_decode($response->getBody(), true);
         dd($data);
      } catch (\Exception $e) {

         dd(['error' => $e->getMessage()]);
      }
   }
}
