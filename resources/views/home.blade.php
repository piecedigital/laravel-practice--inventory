@extends("templates.layout")

@section("title", "all about larva")

@section("page-home", "set")

@section("content")
  <div class="content-header">

  </div>
  @component('components/search-comp')
    @slot('search_title')
      Search Our Stuff
    @endslot
  @endcomponent
@endsection
