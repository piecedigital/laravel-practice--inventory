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

Route::get('/', function (Request $request) {
    // seller=darrell&make=&model=&price=&weight=&year=
    return getListings($request, 'home', false);
});
Route::view('/about', 'about');

Route::get('/listings', function (Request $request) {
    // seller=darrell&make=&model=&price=&weight=&year=
    return getListings($request, 'listings', true);
});

Route::get('/listings/{id}', function ($listing_id) {

  return view('listings-item', [
      "index" => $listing_id,
      "listing" => App\Listing::where(["inventory.id" => $listing_id])->joinMissing()->get()->first(),
      "media" => App\Media::where(["inventory_item_id" => $listing_id])->get(),
      "errors" => Request::session(),
      // "reviews" => App\Review::where(["inventory_item_id" => $listing_id])->first()
  ]);
});
Route::post("/listings/{id}", function(Request $request, $listing_id) {
  $ii = Request::input("inventory_item");
  $fn = Request::input("first_name");
  $ln = Request::input("last_name");
  $e = Request::input("email");
  $mb = Request::input("message_body");

  $emailMatch;
  preg_match('/^([a-z0-9]{1,})(\.[a-z0-9]{1,})?(@[a-z0-9]{2,}\.[a-z0-9]{2,})(\.[a-z0-9]{2,})?/', $e, $emailMatch);

  $errMsg = [];
  if(
    strlen($fn) < 2
  ) {
    // print "Must include valid first name";
    $errMsg["fn"] = "Must include valid first name";
  }
  if(
    strlen($ln) < 2
  ) {
    // print "Must include valid last name";
    $errMsg["ln"] = "Must include valid last name";
  }
  if(
    !(count($emailMatch) > 0)
  ) {
    // print "Must include valid email address";
    $errMsg["e"] = "Must include valid email address";
  }
  if(
    strlen($mb) < 30
  ) {
    // print "Must contain 30+ characters";
    $errMsg["mb"] = "Must contain 30+ characters";
  }

  return view('listings-item', [
      "index" => $listing_id,
      "listing" => App\Listing::where(["inventory.id" => $listing_id])->joinMissing()->get()->first(),
      "media" => App\Media::where(["inventory_item_id" => $listing_id])->get(),
      "errors" => $errMsg,
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

function getListings(Request $request, string $page, bool $getList = false) {
  $allListings = App\Listing::joinMissing();

  $sellerList = App\Seller::get(["id", "name"]);
  $makeList = $allListings->pluck("make")->unique()->values()->all();
  $modelList = $allListings->pluck("model")->unique()->values()->all();
  $minWeight = $allListings->min("weight_value");
  $maxWeight = $allListings->max("weight_value");
  $minPrice = $allListings->min("price");
  $maxPrice = $allListings->max("price");
  $yearList = $allListings->pluck("year")->unique()->values()->all();

  $listings = [];
  if($getList) {
    $listings = $allListings->when(Request::input("seller"), function($query) use ($request) {
      return $query->where("seller_id", Request::input("seller"));
    })
    ->when(Request::input("make"), function($query) use ($request) {
      return $query->where("make", Request::input("make"));
    })
    ->when(Request::input("model"), function($query) use ($request) {
      return $query->where("model", Request::input("model"));
    })
    ->when(Request::input("minprice"), function($query) use ($request) {
      return $query->where("price", ">=", Request::input("minprice"));
    })
    ->when(Request::input("maxprice"), function($query) use ($request) {
      return $query->where("price", "<=", Request::input("maxprice"));
    })
    ->when(Request::input("minweight"), function($query) use ($request) {
      return $query->where("weight_value", ">=", Request::input("minweight"));
    })
    ->when(Request::input("maxweight"), function($query) use ($request) {
      return $query->where("weight_value", "<=", Request::input("maxweight"));
    })
    ->when(Request::input("year"), function($query) use ($request) {
      return $query->where("year", Request::input("year"));
    })
    ->get();
  }

  return view($page, [
      "listings" => $listings,
      "sellerList" => $sellerList,
      "makeList" => $makeList,
      "modelList" => $modelList,
      "minWeight" => $minWeight,
      "maxWeight" => $maxWeight,
      "minPrice" => $minPrice,
      "maxPrice" => $maxPrice,
      "yearList" => $yearList,
  ]);
}
