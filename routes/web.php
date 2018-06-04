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

include 'route-handlers.php';

Route::redirect('/home', "/", 301);

Route::get('/', function (Request $request) {
    // seller=darrell&make=&model=&price=&weight=&year=
    return $helpers["getListings"]($request, 'home', false);
});
Route::view('/about', 'about');

Route::get('/listings', function (Request $request) {
    // seller=darrell&make=&model=&price=&weight=&year=
    return $helpers["getListings"]($request, 'listings', true);
});

Route::get('/listings/{id}', $handlers["getListItemHandler"]);
Route::post("/listings/{id}", $handlers["postListItemHandler"]);

Route::get('/reviews', function () {
    return view('reviews', [
        "reviews" => App\Review::get()
    ]);
});

Route::get('/reviews/{id}', $handlers["getReviewItemHandler"]);
