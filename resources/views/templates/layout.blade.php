<!DOCTYPE html>
<html>
<head>
    <title>@yield("title", "Larva Inventory") | Piece Digital Web Services</title>
    <meta name="language" content="en-us" />
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no" />
    <link rel="stylesheet" href="/css/style.css">

    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="classification" content="web development, education, full-stack web development" />
    <meta name="creator" content="Darryl Dixon, Piece Digital" />
    <meta name="publisher" content="Piece Digital Studios" />
    <meta http-equiv="Content-Type" content="text/html"; charset="UTF-8" />
    <meta name="robots" content="index, follow" />
    <meta name="revisit-after" content="21 days" />

    <meta property="og:url" content="http://pds-larva.herokuapp.com/"/>
    <meta property="og:title" content="@yield("title", "Larva Inventory") | Piece Digital Web Services"/>
    {{-- <meta property="og:image" content=""/> --}}
    <meta property="og:site_name" content="Larva Inventory"/>
    <meta property="og:description" content="@yield("description", "Larva is an inventory of nothing, the result of a self-educating developer.")">

    {{-- <link rel="shortcut icon" type="image/x-icon" href="logo.ico">
    <link rel="apple-touch-icon" type="image/x-icon" href="logo.ico"> --}}
</head>
<body>
    <input type="checkbox" id="mobile-menu" value="">
    <header>
        <label class="mobile-menu" for="mobile-menu">
            <div class=""></div>
            <div class=""></div>
            <div class=""></div>
        </label>
        <nav>
            {{-- <div class="highlighter"></div> --}}
            {{-- <div class="decoration"> --}}
            <a class="@yield('page-home')" href="/">Home</a><a class="@yield('page-listings')" href="/listings">Listings</a><a class="@yield('page-reviews')" href="/reviews">Reviews</a><a class="@yield('page-about')" href="/about">About</a>
            {{-- </div> --}}
        </nav>
    </header>

    <div class="container">
        @yield("content")
    </div>

    <footer>
        @section("footer")
        @show
    </footer>
    <label class="dim-backdrop" for="mobile-menu"></label>
    {{-- <script src="/js/main.js" type="text/javascript"></script> --}}
</body>
</html>
