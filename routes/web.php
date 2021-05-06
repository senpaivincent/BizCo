<?php

use Illuminate\Support\Facades\Route;

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
Route::auth();

//Front Page
Route::get('/', function () {
    return view('index');
});

//Home Page **Auth Protected In Controller
Route::get('/home', 'HomeController@index')->name('Home');

//Profile Page **Auth Protected
//Route::get('/profile', function () {
   //return view('profile');
//})->name('Profile')->middleware('auth');

//Inventory Page **Auth Protected
Route::resource('/inventory', 'InventoryController')->middleware('auth');

//UserProfileController
Route::resource('/profile', 'ProfileController')->middleware('auth');




//Debugging Routes
Route::get('checkpage', 'CheckController@index');

Route::get('debug', function(){
    return view('debug.index');
});