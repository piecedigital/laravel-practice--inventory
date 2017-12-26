<?php

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

Route::redirect('/home', "/", 301);

Route::view('/', 'home');

Route::get('/listings', function (App\Listing $listings) {
  return view('listings', [
    "listings" => $listings->get()
  ]);
});

Route::get('/listings/{id}', function () {
  return view('listings-item');
});

Route::get('/reviews', function () {
  return view('reviews');
});

Route::get('/reviews/{id}', function () {
  return view('reviews-item');
});
