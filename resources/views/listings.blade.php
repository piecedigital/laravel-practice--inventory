@extends("templates.layout")

@section("title", "Listings")

@section("page-listings", "set")

@section("content")
  @component('components/listings', ["listings" => $listings])
    @slot('listing_title')
      See Our Stuff
    @endslot
  @endcomponent
@endsection
