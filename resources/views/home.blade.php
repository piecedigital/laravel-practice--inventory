@extends("templates.layout")

@section("title", "all about larva")

@section("page-home", "set")

@section("content")
  <div class="content-header">
    <div class="page-wrap center-content-margin center-content-text">
      <h1>Welcome to Larva!</h1>
    </div>
  </div>
  <div class="page-wrap center-content-margin">
    <div class="separator"></div>
  </div>
  <div class="page-wrap center-content-margin center-content-text">
    <p>
        Please enjoy our inventory of nothing at all!
        <br><br>
        Message our non-existant sellers and review our non-existant products!
    </p>
  </di
  <div class="page-wrap center-content-margin">
    <div class="separator"></div>
  </div>
  @component('components/search-comp', [
    "makeList" => $makeList,
    "sellerList" => $sellerList,
    "modelList" => $modelList,
    "minWeight" => $minWeight,
    "maxWeight" => $maxWeight,
    "minPrice" => $minPrice,
    "maxPrice" => $maxPrice,
    "yearList" => $yearList,
  ])
    @slot('search_title')
      Search Our Stuff
    @endslot
  @endcomponent
@endsection
