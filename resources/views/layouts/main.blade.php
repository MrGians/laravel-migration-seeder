<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- CSS --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  {{-- JS --}}
  <script src="{{ asset('js/app.js') }}"></script>

  <title>{{ env('APP_NAME') }} | @yield('title')</title>
</head>
<body>
  {{-- Header --}}
  @include('includes.header')
  {{-- Main --}}
  <main>
    <div class="container">
      @yield('main-content')
    </div>
  </main>
  
</body>
</html>