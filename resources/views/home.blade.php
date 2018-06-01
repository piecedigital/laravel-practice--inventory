@extends("templates.layout")

@section("title", "all about larva")

@section("page-home", "set")

@section("content")
  <div class="content-header">

  </div>
  @component('components/search-comp', [
    "makeList" => $makeList,
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
