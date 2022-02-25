<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
@include('include.head')
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light px-4 absolute">
        @include('include.topbar')
      </nav>
    </header>
    <div id="haut_de_page" role="main" class="main container-fluid">
      <div class="row">
        <div class="col-1 col-lg-2 sidebar pl-0 pr-0">
        </div>
        <div id="content" class="col-13 col-lg-13 ml-auto px-4">
@yield('headcontent')
@yield('content')
        </div>
      </div>
    </div>
    <div class="footer text-cbo-4 text-right text-truncate">
      <p class="m-0 pr-5">
      </p>
    </div>
@include('include.foot')
  </body>
</html>
