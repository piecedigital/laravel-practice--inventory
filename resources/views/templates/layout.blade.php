<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield("title") | Piece Digital Web Services</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>
    <header>
        @section("header")
          <nav>
            <div class="decoration">
              <a class="@yield('page-home')" href="/">Home</a>
              <a class="@yield('page-listings')" href="/listings">Listings</a>
              <a class="@yield('page-reviews')" href="/reviews">Reviews</a>
              <a class="@yield('page-about')" href="/about">About</a>
            </div>
            <div class="highlighter"></div>
          </nav>
        @show
    </header>

    <div class="container">
      @yield("content")
    </div>

    <footer>
      @section("footer")
      @show
    </footer>
    <script src="/js/main.js" type="text/javascript"></script>
  </body>
</html>
