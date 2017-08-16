<!DOCTYPE html>
<html>
<head>
	<title>Tareas</title>
</head>
<body>
 <!--<ul>
<?php foreach($tareas as $tarea): ?>
 <li><?php echo $tarea; ?></li>
 <?php endforeach; ?>
 </ul>
 -->
 <ul>
 	@foreach($tareas as $tarea):
 	<li>
 		{{$tarea->titulo }}
 	</li>
 	@endforeach

</body>
</html>