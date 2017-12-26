@extends("templates.layout")

@section("title", "Listings")

@section("page-listings", "set")

@section("content")
  @component('components/listings', ["listings" => $listings])

  @endcomponent
@endsection
