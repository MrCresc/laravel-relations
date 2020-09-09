<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  </head>
  <body>
    <header>
      <nav>
        <img class="logo" src="https://image.flaticon.com/icons/png/512/282/282120.png" alt="">
        @yield('navContent')
      </nav>
    </header>
    <main>
      @yield('mainContent')
    </main>
  </body>
</html>
