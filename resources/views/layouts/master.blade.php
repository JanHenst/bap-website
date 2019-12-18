<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  <body>

    <header>
      <h2>
        @section('header')
          De Header
        @show
      </h2>
    </header>

    <nav>
      <ul>
        <li><a href="{{ route('homepage') }}">Home</a></li>
        <li><a href="{{ route('show-name', ['name' => 'Honk']) }}">Show a name</a></li>
      </ul>
    </nav>

    <main>
      @yield('content')
    </main>

    <footer>
      Footer
    </footer>

  </body>
</html>
