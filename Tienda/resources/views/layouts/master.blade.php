<!DOCTYPE html>
<html>
<head>
	<title>Tienda</title>
	
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.1/css/materialize.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style type="text/css">
	 body {
    display: flex;
    min-height: 100vh;
    flex-direction: column;
  }

  main {
    flex: 1 0 auto;
  }
</style>

</head>
<body>
<header>
<!--NAVBARD fijo -->
@include('layouts.nav')
</header>
<main>
<!--CONTENIDO variable -->
@yield('content')

@yield('minombre')
</main>
<footer>
<!--FOOTER Fijo -->
@include('layouts.footer')
</footer>

</body>
</html>