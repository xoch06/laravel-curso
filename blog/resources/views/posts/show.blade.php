@extends('layouts.master')

@section('content')
	<h1>{{ $post->title }}</h1>
	<hr>
	<p>{{ $post->created_at->toFormattedDateString() }}</p>
	<p>{{ $post->body}}</p>
	
	<br>
	<h1>Comentarios</h1>
	<hr>
 <!-- Formulario para comentarios -->

	
    <form method="POST" action="/posts/{{ $post-> }}/Comments">
    {{ csrf_field() }}
          
          <div class="input-field">
          <textarea id="body" class="materialize-textarea"></textarea>
          <label for="body">¿Deseas comentar algo?</label>
        </div>
      
    <button class="btn waves-effect waves-light" type="submit">Comentar
          <i class="material-icons right">send</i>
        </button>
     </form>
   
   @include('layouts.error');

    <ul class="collection">
	@foreach($post->comments as $comment)
	<li class="collection-item">
	{{ $comment->created_at->diffForHumans() }} <br>
	{{ $comment->body }} <br>
	</li>
	@endforeach
 </ul>
@endsection

