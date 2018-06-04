<div id="listings-wrapper" class="page-wrap center-content-margin">
  <div id="listings-component" class="component-defaults">
    <h1 class="title">{{ $listing_title }}</h1>
    <div class="separator"></div>
    <div class="center">
      <ul>
        @foreach ($listings as $key => $value)<li class="listing-item">
            @component('components/list-item-comp', ["value" => $value, "media" => $media])
            @endcomponent
          </li>@endforeach
      </ul>
    </div>
  </div>
</div>
