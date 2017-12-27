<div id="listings-wrapper">
  <div id="listings-component">
    <h1 class="title">{{ $listing_title }}</h1>
    <div class="separator"></div>
    <div class="center">
      <ul>
        @foreach ($listings as $key => $value)<li class="listing-item">

            <a href="/listings/{{ $value->id }}" class="content">
              {{ $value }}
            </a>
          </li>@endforeach
      </ul>
    </div>
  </div>
</div>
