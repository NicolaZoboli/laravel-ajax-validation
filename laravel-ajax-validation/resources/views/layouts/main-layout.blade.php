<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>API</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>

  </head>
  <body>

    <div class="app">
      <div class="container">
          @include('partials.header')
          @yield('content')
          @include('partials.footer')
      </div>
    </div>

  </body>
</html>
