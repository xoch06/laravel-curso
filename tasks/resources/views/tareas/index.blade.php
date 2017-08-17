<!DOCTYPE html>
<html>
<head>
	<title>Tareas</title>
</head>
<body>
 <h1>Tareas</h1>
 <ul>
 	@foreach($tareas as $tarea):
 	 <li><a href="/tareas/{{ $tarea->id}}">{{ $tarea->titulo }}</a ></li>
 	@endforeach

</body>
</html>