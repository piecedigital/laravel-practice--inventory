@extends("templates.layout")

@section("title", "all about larva")

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
    <div class="wrapper">
        @component('components/list-item-detailed-comp', ["value" => $listing, "media" => $media])
        @endcomponent
        <div class="tab-container component-defaults page-wrap center-content-margin">
            <input id="tab-1" type="radio" name="tab" checked value="">
            <input id="tab-2" type="radio" name="tab" value="">

            <label for="tab-1">Message Seller</label><label for="tab-2">Write Review</label>

            <div class="tab-view tab-view-1">
                @component('components/send-message-comp', [
                    "type" => "dealer_message",
                    "listing_item_data" => $listing,
                    "errors" => $errors,
                    "success" => $success,
                ])
                @endcomponent
            </div>
            <div class="tab-view tab-view-2">
                @component('components/send-message-comp', [
                    "type" => "item_review",
                    "listing_item_data" => $listing,
                    "errors" => $errors,
                    "success" => $success,
                ])
                @endcomponent
            </div>
        </div>
    </div>
@endsection
