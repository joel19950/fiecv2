<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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


Route::get('/', [ClientController::class, 'home']);
Route::get('/aboutus', [ClientController::class, 'aboutus']);
Route::get('/contact', [ClientController::class, 'contact']);
Route::get('/products', [ClientController::class, 'products']);
Route::get('/product_detail', [ClientController::class, 'product_detail']);
Route::get('/search', [ClientController::class, 'search']);

