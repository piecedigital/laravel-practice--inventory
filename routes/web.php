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
        "listings" => App\Listing::joinMissing()->get()
    ]);
});

Route::get('/listings/{id}', function ($listing_id) {
    return view('listings-item', [
        "index" => $listing_id,
        "listing" => App\Listing::where(["inventory.id" => $listing_id])->joinMissing()->get()->first(),
        "media" => App\Media::where(["inventory_item_id" => $listing_id])->get()
        // "reviews" => App\Review::where(["inventory_item_id" => $listing_id])->first()
    ]);
});

Route::get('/reviews', function () {
    return view('reviews', [
        "reviews" => App\Review::get()
    ]);
});

Route::get('/reviews/{id}', function ($review_id) {
    $review = App\Review::where(["id" => $review_id])->get()->first();

    return view('reviews-item', [
        "index" => $review_id,
        "review" => $review,
        "listing_item_data" => App\Listing::where(["id" => $review->inventory_item_id])->get()->first()
    ]);
});
