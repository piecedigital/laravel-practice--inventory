@extends("templates.layout")

@section("title", "Listings")

@section("page-listings", "set")

@section("content")
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
