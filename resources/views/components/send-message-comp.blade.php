<div id="send-message-component">
    <div class="title">
        @if ($type == "dealer_message")
            <h2>Message The Seller About This Item</h2>
        @elseif ($type == "item_review")
            <h2>Write A Review</h2>
        @endif
    </div>
    <div class="separator">

    </div>
    <form class="" action="{{parse_url(url()->current())["path"]}}" method="post">
        <div class="row">
            <h3>Inventory Item:</h3>
            @if ($listing_item_data)
                <input type="hidden" name="inventory_item" value="{{ $listing_item_data->id }}">
            @elseif ($listings)
                <select class="" name="inventory_item">
                    @foreach ($listings as $key => $listing_item_value)
                        <option value="{{ $listing_item_value->id }}">
                            {{ $listing_item_value->make . " " . $listing_item_value->model . ", " . $listing_item_value->year }}
                        </option>
                    @endforeach
                </select>
            @endif
        </div>
        <div class="row">
            <h3><span class="error-message">*</span> First Name:</h3>
            <input type="text" name="first_name" value="">
            <div class="error-message">
              {{ (array_key_exists("fn", $errors) ? $errors["fn"] : "")}}
            </div>
        </div>
        <div class="row">
            <h3><span class="error-message">*</span> Last Name:</h3>
            <input type="text" name="last_name" value="">
            <div class="error-message">
              {{ (array_key_exists("ln", $errors) ? $errors["ln"] : "")}}
            </div>
        </div>
        <div class="row">
            <h3><span class="error-message">*</span> Email:</h3>
            <input type="text" name="email" value="">
            <div class="error-message">
              {{ (array_key_exists("e", $errors) ? $errors["e"] : "")}}
            </div>
        </div>
        @if ($type == "item_review")
            <div class="row">
                <h3><span class="error-message">*</span> Review Title:</h3>
                <input type="text" name="title" value="">
                <div class="error-message">
                    {{ (array_key_exists("t", $errors) ? $errors["t"] : "")}}
                </div>
            </div>
        @endif
        <div class="row">
            <h3><span class="error-message">*</span> Message:</h3>
            <textarea name="message_body" rows="8" cols="80"></textarea>
            <div class="error-message">
              {{ (array_key_exists("mb", $errors) ? $errors["mb"] : "")}}
            </div>
        </div>
        <input type="hidden" name="seller" value="{{$listing_item_data->seller_id}}">
        <input type="hidden" name="submission_type" value="{{$type}}">
        <div class="row">
            <button type="submit" name="button">Send</button>
        </div>
        <div class="error-message">
          {{ (array_key_exists("database", $errors) ? "Fatal Error: ".$errors["database"] : "")}}
        </div>
        @if ($success)
            <div class="success-message">
              Sent
            </div>
        @endif
        {{ csrf_field() }}
    </form>
</div>
