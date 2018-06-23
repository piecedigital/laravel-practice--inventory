<div class="wrapper">
    <div id="review-item-component" class="">
        <a href="/inventory-reviews/review/{{ $review->id }}" class="content">
            <h3 class="title">
                {{ $review->title }}
            </h3>
            <div class="separator"></div>
            <div class="">

            </div>
            <div class="center">
                <div class="body">
                    {{ str_limit($review->message_body, $limit = 150, $end = '...') }}
                </div>
            </div>
        </a>
    </div>
</div>
