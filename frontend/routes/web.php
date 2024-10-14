<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [homeController::class, 'index']);
Route::post('/login', [LoginController::class, 'index']);

Route::get('/loginPage', function () {
   return view('login', [
      "title" => "Login"
   ]);
});

Route::get('/signup', function () {
   return view('signup', [
      "title" => 'Sign Up'
   ]);
});
