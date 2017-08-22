@extends('layouts.master')
@section('minombre')
	<p>Xoch</p>
@endsection

@section('content')
<h1>Tienda</h1>
<ul>
	@foreach($products as $product)
		@if($product->existencia ==1)
			<li><a href="/detalle/{{ $product->id}}">{{$product->descripcion}}</a></li>
		@endif
	@endforeach
</ul>
@endsection