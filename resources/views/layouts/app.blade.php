<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>

  @yield('css')

  <!-- Assets JS/CSS -->
  @vite('resources/js/app.js')
</head>

<body>
  @include('partials._navbar')
  @include('partials._flash-message')

  <main>
    @yield('main-content')
  </main>

</body>

</html>
