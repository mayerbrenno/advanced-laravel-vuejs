<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\Contact\ContactController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\Tests\TestController;
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

Route::get('/', [HomeController::class, 'home'])->name('site.index');

Route::get('/about', [AboutController::class, 'about'])->name('site.about');

Route::get('/contact', [ContactController::class, 'contact'])->name('site.contact');

Route::get('/login', function () {
    return view('site.login');
})->name('site.login');

Route::prefix("/app")->group(function () {
    Route::get('/clients', function () {
        return "clients";
    })->name("app.clients");
    Route::get('/supplier', [SupplierController::class, 'index'])->name("app.supplier");
    Route::get('/products', function () {
        return "products";
    })->name("app.products");
});

Route::prefix("/test")->group(function () {
    Route::get('/parameters/{a}/{b}/{c}', [TestController::class, 'parameters'])->name("test.parameters");
    Route::get('/noParam', [TestController::class, 'noParam'])->name("test.noParam");
});

// Redirect
// Route::get("/route1", function () {
//     echo "route 1";
// })->name("site.route1");

// Route::get("/route2", function () {
//     return redirect()->route("site.route1");
// })->name("site.route2");

//Fallback
Route::fallback(function () {
    echo "Route not found. <a href='" . route("site.index") . "'>Home</a> to return to the home page.";
});
