<div class="wrapper">
    <div id="review-item-component" class="component-defaults page-wrap center-content-margin">
        <a href="/reviews/{{ $review->id }}" class="content">
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
