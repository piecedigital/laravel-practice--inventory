@extends("templates.layout")
@section("title", "all about larva")

@section("title", "all about larva")

@section("page-home", "set")

@section("content")
  <div class="content-header">

  </div>
  <div id="search-wrapper" class="">
    @component('components/search')
      @slot('search_title')
        Search Our Stuff
      @endslot
    @endcomponent
  </div>
@endsection
