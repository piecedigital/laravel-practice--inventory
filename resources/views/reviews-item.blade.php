@extends("templates.layout")

@section("title", "all about larva")

@section("page-reviews", "set")

@section("content")
    @component('components/review-item-detailed-comp', [
        "review" => $review,
        "inventory_item_data" => $listing_item_data
    ])
    @endcomponent
@endsection
