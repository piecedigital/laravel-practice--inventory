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

$stuff = include(app_path().'/../includes/route-handlers.php');

Route::redirect('/home', "/", 301);

Route::get('/', function (Request $request) use($helpers) {
  return $helpers["getListings"]($request, 'home', false);
});
Route::view('/about', 'about');

Route::get('/listings', function (Request $request) use($helpers) {
  return $helpers["getListings"]($request, 'listings', true);
});

Route::get('/listings/{id}', $handlers["getListItemHandler"]);
Route::post("/listings/{id}", $handlers["postListItemHandler"]);

Route::get('/reviews', function () {
  return view('reviews', [
    "reviews" => App\Review::get()
  ]);
});

Route::get('/inventory-reviews/{iid}', $handlers["getInventoryReviewsHandler"]);

Route::get('/inventory-reviews/review/{rid}', $handlers["getReviewItemHandler"]);
