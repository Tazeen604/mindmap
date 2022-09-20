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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminLogin', function () {
    return view('adminLogin');
 });
 
Route::get('/dashboard', function () {
    return view('dashboard');
 });
/* Route::get("/signin", function () {
    return view('/signin');
 });*/
 Route::view("signin",'signin');
 Route::view("signup", 'signup');

Route::get('/mapp5/{name}', function ($visitor) {
    $name=$visitor;
    return view('mapp5',compact('name'));
})->name('mapp5');

Route::post('/adminLogin', 'App\Http\Controllers\loginController@login');
Route::post('/signin', 'App\Http\Controllers\signinController@store')->name('signin');
//Route::get('/signin', 'App\Http\Controllers\signinController@create')->name('signin');
Route::get('dashboard', 'App\Http\Controllers\signinController@showUsers');

 
 