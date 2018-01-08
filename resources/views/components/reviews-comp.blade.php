<div id="wrapper">
  <div id="reviews-component">
    <h1 class="title">{{ $reviews_title }}</h1>
    <div class="separator"></div>
    <div class="center">
      <ul>
        @foreach ($reviews as $key => $review)<li class="review-item">
            @component('components/review-item-comp', ["review" => $review])
            @endcomponent
          </li>@endforeach
      </ul>
    </div>
  </div>
</div>
