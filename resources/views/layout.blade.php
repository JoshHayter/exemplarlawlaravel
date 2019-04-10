<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Exemplar Law')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script defer src="{{ asset('js/app.js') }}"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id='app'>
      <navbar-component></navbar-component>
      @yield('content')
    </div>
  </body>
</html>
