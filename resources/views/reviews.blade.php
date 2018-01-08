@extends("templates.layout")

@section("title", "all about larva")

@section("page-reviews", "set")

@section("content")
    @component('components/reviews-comp', ["reviews" => $reviews])
        @slot('reviews_title')
            See Reviews
        @endslot
    @endcomponent
@endsection
