<!DOCTYPE html>
<html>
  <head>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>
  <body>

    <header>
      @include('layouts.nav')
    </header>
    
    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>
    
    <footer>
      @include('layouts.footer')
    </footer>

  </body>
</html>