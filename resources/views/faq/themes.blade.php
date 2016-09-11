@extends('default')

@section('content')
	<div class="wrapper style2">
		<div class="title">Questions de la faq</div>
		<div id="highlights" class="container">
		@if (!Auth::check())
			<p>Vous devez être connecter pour posez une question ! <a href="/account/login">Connectez-vous ici</a></p>
		@else
			<a href="/faq/themes/add" class="button style3">Posez une question</a>
		@endif
		<hr>
			<table>
				<thead>
					<tr>
						<th>Questions</th>
						<th>Themes</th>
						<th>Posté par</th>
						<th>Nombre de réponce</th>
						<th>Lien</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($themes as $theme)
						<tr>
							<td>{{ $theme->question }}</td>
							<td>{{ $theme->theme }}</td>
							<td>{{ $theme->nom }} {{ $theme->prenom }}</td>
							<td>0</td>
							<td><a href="/faq/themes/{{ $theme->slug }}">Voir la question</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop