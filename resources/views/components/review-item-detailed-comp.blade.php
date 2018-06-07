<div class="wrapper">
    <div id="review-item-detailed-component" class="component-defaults page-wrap center-content-margin">
        <h1 class="title">
            {{ $review->title }}
        </h1>
        <div class="separator"></div>
        <div class="center">
            <div class="body">
                {{ $review->body }}
            </div>
            <div class="separator-small"></div>
            <div class="from">
                <span>{{ $review->first_name }} {{ $review->last_name }}</span>@if ($inventory_item_data)<span>,
                    <a href="/listings/{{ $inventory_item_data->id }}" class="bold">{{ $inventory_item_data->make . " " . $inventory_item_data->model . ", " . $inventory_item_data->year }}</a>
                </span>@endif
            </div>
        </div>
    </div>
</div>
