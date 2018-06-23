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
      <div class="separator-2"></div>
    </div>
    @component('components/reviews-comp', ["reviews" => $reviews])
        @slot('reviews_title')
            See Reviews @if (isset($listing_item_data))
                for "{{$listing_item_data->make}} {{$listing_item_data->model}}, {{$listing_item_data->year}}"
            @endif
        @endslot
    @endcomponent
@endsection
