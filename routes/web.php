<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\getproductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('auth/login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //return view('dashboard');
    return view('pages.product');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/about', function(){
    echo "<h2> This is About Page</h2>";
});
Route::middleware(['auth:sanctum', 'verified'])->get('/product', function () {
    return view('pages.product');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/account', function () {
    return view('pages.account');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/getproduct',[getproductController::class, 'index']);

Route::post('/createproduct', [getproductController::class, 'store']);
