<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<body>
<h1>Tienda</h1>
<ul>
	@foreach($products as $product)
		@if($product->existencia ==1)
			<li>{{ $product->descripcion}} - ${{$product->precio}}</li>
		@endif
	@endforeach
</ul>
</body>
</html>