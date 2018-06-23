@extends("templates.layout")

@section("title", "Larva Listings")

@section("page-listings", "set")

@section("content")
    <div class="content-header">
      <div class="page-wrap center-content-margin center-content-text">
        <h1>Larva Inventory</h1>
      </div>
    </div>
    <div class="page-wrap center-content-margin">
      <div class="separator"></div>
    </div>
    @component('components/search-comp', [
      "makeList" => $makeList,
      "sellerList" => $sellerList,
      "modelList" => $modelList,
      "minWeight" => $minWeight,
      "maxWeight" => $maxWeight,
      "minPrice" => $minPrice,
      "maxPrice" => $maxPrice,
      "yearList" => $yearList,
    ])
      @slot('search_title')
          Filter Listings
      @endslot
    @endcomponent
    @component('components/listings-comp', ["listings" => $listings, "media" => $media = []])
        @slot('listing_title')
            See Our Stuff
        @endslot
    @endcomponent
@endsection
