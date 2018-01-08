<div class="wrapper">
    <div id="review-item-component">
        <a href="/reviews/{{ $review->id }}" class="content">
            <h3 class="title">
                {{ $review->title }}
            </h3>
            <div class="separator"></div>
            <div class="">

            </div>
            <div class="center">
                <div class="body">
                    {{ $review->body }}
                </div>
            </div>
        </a>
    </div>
</div>
