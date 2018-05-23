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
Route::view('/about', 'about');

Route::get('/listings', function (Request $request) {
    // seller=darrell&make=&model=&price=&weight=&year=
    return view('listings', [
        "listings" => App\Listing::joinMissing()
        ->when(Request::input("seller"), function($query) use ($request) {
          $queryValue = Request::input("seller");
          $seller = App\Seller::where("name", "LIKE", "%".$queryValue."%")->first();
          if(is_null($seller)) {
            // print "nully";
            return $query->where("seller_id", null);
          }
          return $query->where("seller_id", $seller->id);
        })
        ->when(Request::input("make"), function($query) use ($request) {
          return $query->where("make", Request::input("make"));
        })
        ->when(Request::input("model"), function($query) use ($request) {
          return $query->where("model", Request::input("model"));
        })
        ->when(Request::input("price"), function($query) use ($request) {
          return $query->where("price", Request::input("price"));
        })
        ->when(Request::input("weight"), function($query) use ($request) {
          return $query->where("weight_value", Request::input("weight"));
        })
        ->when(Request::input("year"), function($query) use ($request) {
          return $query->where("year", Request::input("year"));
        })
        ->get()
          // "seller" => $request->seller,
          // "make" => $request->make,
          // "model" => $request->model,
          // "price" => $request->price,
          // "weight_value" => $request->weight,
          // "year" => $request->year,
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

Route::get('/reviews/{id}', function ($inventory_id) {
    $review = App\Review::where(["inventory_item_id" => $inventory_id])->get()->first();

    return view('reviews-item', [
        "index" => $inventory_id,
        "review" => $review,
        "listing_item_data" => App\Listing::where([
          "id" => $review->inventory_item_id,
          ])->get()->first()
    ]);
});
