@extends("templates.layout")

@section("title", "Listings")

@section("page-listings", "set")

@section("content")
    @component('components/search-comp')
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
