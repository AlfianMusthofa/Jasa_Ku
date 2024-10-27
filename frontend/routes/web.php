<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\SignupController;
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
Route::post('/signup', [SignupController::class, 'index']);
Route::get('/service', [serviceController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', [DashboardController::class, 'index']);

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
