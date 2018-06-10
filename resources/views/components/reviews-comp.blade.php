<div class="wrapper">
  <div id="reviews-component" class="component-defaults page-wrap center-content-margin">
    <h1 class="title">{{ $reviews_title }}</h1>
    <div class="separator"></div>
    <div class="center">
      <ul class="listing-defaults">
        @foreach ($reviews as $key => $review)<li class="review-item">
            @component('components/review-item-comp', ["review" => $review])
            @endcomponent
          </li>@endforeach
      </ul>
    </div>
  </div>
</div>
