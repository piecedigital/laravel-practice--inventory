@extends("templates.layout")

@section("title", "all about larva")

@section("page-home", "set")

@section("content")
  <div class="content-header">
    <div class="page-wrap center-content-margin center-content-text">
      <h1>Welcome</h1>
    </div>
  </div>
  <div class="page-wrap center-content-margin">
    <hr>
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
