@extends('default')

@section('content')
	<div class="wrapper style2">
		<div class="title">Questions</div>
		<div id="highlights" class="container">
			<h2>{{ $question->question }}</h2>
			<p>Theme de la question : <strong>{{ $question->theme }}</strong></p>
			<p>Posté par {{ $question->nom }} {{ $question->prenom }}</p>
			<hr>
			@if (Auth::check())
				{!! Form::open(['url' => '/faq/themes/comment', 'method' => 'post']) !!}
					{!! Form::token() !!}
					<div class="row 150%">
						<div class="12u 12u(mobile)">
							{!! Form::text('title', null, $attributes = ['placeholder' => 'Titre du commentaire']) !!}
						</div>
						<div class="12u 12u(mobile)">
							{!! Form::textarea('content', null, $attributes = ['placeholder' => 'Contenu du commentaire']) !!}
						</div>
						<div class="12u 12u(mobile)">
							{!! Form::hidden('slug', $question->slug) !!}
							{!! Form::submit('Poster',['class' => 'style3']) !!}
						</div>
					</div>
				{!! Form::close() !!}
			@else
				<p>Vous devez être connecter pour poster un commentaire! <a href="/account/login">Connectez-vous ici</a></p>
			@endif
		</div>
	</div>
	<div class="wrapper style3">
		<div class="title">Liste des commentaires</div>
		<div id="highlights" class="container">
			<div class="comments">
				@foreach ($comments as $comment)
					<div class="comment 12u 12u(mobile)">
						<h3>{{ $comment->title }}</h3>
						<p>{{ $comment->content }}</p>
						<p>Posté par {{ $comment->nom }} {{ $comment->prenom }}</p>
					</div>
				@endforeach
			</div>
		</div>
	</div>
@stop