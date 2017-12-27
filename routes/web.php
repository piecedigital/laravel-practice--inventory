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

Route::get('/listings', function () {
  return view('listings', [
    "listings" => App\Listing::get()
  ]);
});

Route::get('/listings/{id}', function ($listing) {
  return view('listings-item', [
    "index" => $listing,
    "listing" => App\Listing::where(["inventory.id" => $listing])->joinMissing()->get()->first()
  ]);
});

Route::get('/reviews', function () {
  return view('reviews');
});

Route::get('/reviews/{id}', function () {
  return view('reviews-item');
});
