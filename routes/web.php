<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\TestController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::get('/', 'HomeController@home');

Route::get('/', [HomeController::class, 'home']);

Route::get('/home', [HomeController::class, 'home']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/contact', [ContactController::class, 'contact']);

Route::get('/contact/{name?}', function ($paramName = "Brenno") {
    return $paramName;
});
