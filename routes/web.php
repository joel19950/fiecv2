<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CatalogueController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChangeLanguageController;
/*
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
Route::get('/search', [ClientController::class, 'search']);

//villes
Route::get('/list_city',[CityController::class, 'list_city']);
Route::post('/add_city_save',[CityController::class, 'add_city_save']);
Route::get('/delete_city/{id}',[CityController::class, 'delete_city']);

//catalogues
Route::get('/list_catalogue',[CatalogueController::class, 'list_catalogue']);
Route::post('/add_catalogue_save',[CatalogueController::class, 'add_catalogue_save']);
Route::get('/delete_catalogue/{id}',[CatalogueController::class, 'delete_catalogue']);


//categories
Route::get('/list_category',[CategoryController::class, 'list_category']);
Route::post('/add_category_save',[CategoryController::class, 'add_category_save']);
Route::get('/delete_category/{id}',[CategoryController::class, 'delete_category']);

//produits
Route::get('/list_product',[ProductController::class, 'list_product']);
Route::get('/add_product',[ProductController::class, 'add_product']);
Route::get('/detail_product/{id}',[ProductController::class, 'detail_product']);
Route::post('/add_product_save',[ProductController::class, 'add_product_save']);
Route::get('/delete_product/{id}',[ProductController::class, 'delete_product']);
Route::get('/desactiverproduct/{id}',[ProductController::class, 'desactiverproduct']);
Route::get('/activerproduct/{id}',[ProductController::class, 'activerproduct']);
Route::get('/search', [ProductController::class, 'search_product']);


//shops
Route::get('/list_shop',[ShopController::class, 'list_shop']);
Route::post('/add_shop_save',[ShopController::class, 'add_shop_save']);
Route::get('/delete_shop/{id}',[ShopController::class, 'delete_shop']);

//sliders
Route::get('/list_slider',[SliderController::class, 'list_slider']);
Route::post('/add_slider_save',[SliderController::class, 'add_slider_save']);
Route::get('/delete_slider/{id}',[SliderController::class, 'delete_slider']);

//Contact Us
Route::post('/contact', [ContactController::class, 'contact']);
Route::get ( 'language/{locale}', [ChangeLanguageController::class, 'language']);



