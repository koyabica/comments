<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Comment the page</title>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" />

  </head>

  <body>

    <div class="container">
      <header class="header clearfix">
        
        {{-- @include('layouts.nav') --}}

        <h3 class="text-muted">Comment the Page</h3>

      </header>
      
      

      <main role="main">
        
        {{-- @include('layouts.jumbotron') --}}
        
        @yield('content')

      </main>

      @include('layouts.footer')

      <script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>      

    </div> <!-- /container -->
  </body>
</html>