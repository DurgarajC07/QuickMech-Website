<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

    Route::resource('/customer', 'CustomerController'); 
    Route::post('/c_add-data', 'CustomerController@store');
    Route::resource('/service', 'ServiceController'); 
    Route::post('/s_add-data', 'ServiceController@store');
    Route::resource('/customService', 'CustomServiceController'); 
    Route::post('/add-customService', 'CustomServiceController@store');
    Route::resource('/emergency', 'EmergencyController'); 
    Route::post('/add-emergency', 'EmergencyController@store');
    Route::resource('/acService', 'ACserviceController'); 
    Route::post('/add-acService', 'ACserviceController@store');
    Route::resource('/dentNpaint', 'DentnPaintController'); 
    Route::post('/add-dentNpaint', 'DentnPaintController@store');
    Route::get('userHome', 'HomeController@user')->name('userHome');
    Route::get('cus', 'HomeController@cusService');
    Route::get('ser', 'HomeController@Service');
    Route::get('mechanicDetails', 'HomeController@mechanicInfo');
    Route::get('/workshop','MapController@index');


});


Route::get('/add2cart', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');

//Fetch data from tables
Route::get('myBookings', [BookingController::class, 'index']);
Route::get('aboutUs', [HomeController::class, 'aboutUs']);

