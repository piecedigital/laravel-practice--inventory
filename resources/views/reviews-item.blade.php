@extends("templates.layout")

@section("title", "all about larva")

@section("page-reviews", "set")

@section("content")
    <div class="content-header">
      <div class="page-wrap center-content-margin center-content-text">
        <h1>Larva Reviews</h1>
      </div>
    </div>
    <div class="page-wrap center-content-margin">
      <div class="separator"></div>
    </div>
    @component('components/review-item-detailed-comp', [
        "review" => $review,
        "inventory_item_data" => $listing_item_data
    ])
    @endcomponent
@endsection
