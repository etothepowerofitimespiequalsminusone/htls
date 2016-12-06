<?php

use App\City;
use App\Hotel;

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

Route::get('/', 'HotelController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/admin/booking','AdminController@booking')->name('admin.booking');

Route::resource('hotel', 'HotelController', ['except' => ['edit', 'update', 'destroy']]);
Route::resource('country', 'CountryController', ['only' => ['create', 'store']]);
Route::resource('city', 'CityController', ['only' => ['create', 'store']]);
Route::get('countries/hotels', 'HotelController@indexByCountry');
Route::get('admin', 'AdminController@admin');
Route::resource('booking','BookingController');
Route::get('book/{id}','BookingController@create');
