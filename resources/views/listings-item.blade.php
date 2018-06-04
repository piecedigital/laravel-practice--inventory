@extends("templates.layout")

@section("title", "all about larva")

@section("page-listings", "set")

@section("content")
    <div class="wrapper">
        @component('components/list-item-detailed-comp', ["value" => $listing, "media" => $media])
        @endcomponent
        @component('components/send-message-comp', [
            "type" => "dealer",
            "listing_item_data" => $listing,
            "errors" => $errors
        ])
        @endcomponent
    </div>
@endsection
