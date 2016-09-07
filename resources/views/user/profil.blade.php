@extends('default')

@section('content')
	<div class="wrapper style2">
		<div class="title">{{ $title }}</div>
		<div id="highlights" class="container">
			<div class="row 150%">
				<div class="12u 12u(mobile)">
					<table>
						<thead>
						<tr>
							<td colspan="2"></td>
						</tr>
						</thead>
						<tbody>
							<tr>
								<td>Nom et prénom :</td>
								<td>{{ $user->prenom }} {{ $user->nom }}</td>
							</tr>
							<tr>
								<td>Grade :</td>
								<td>{{ $user->grade }}</td>
							</tr>
							<tr>
								<td>Pseudo :</td>
								<td>{{ $user->pseudo }}</td>
							</tr>
							<tr>
								<td>Inscrit le :</td>
								<td>{{ $user->created_at }}</td>
							</tr>
							<tr>
								<td>Statut :</td>
								<td>{{ $user->statut }}</td>
							</tr>			
						</tbody>
					</table>
				</div>
			</div>
			@if (Auth::user()->nom === $user->nom && Auth::user()->prenom === $user->prenom)
				<hr>
				{!! Form::open(['url' => 'account/edit/'.Auth::user()->id, 'method' => 'put']) !!}
					{!! Form::token() !!}
					<div class="row 150%">
						<div class="6u 12u(mobile)">
							{!! Form::text('nom', Auth::user()->nom, $attributes = ['placeholder' => 'Nom']) !!}
						</div>
						<div class="6u 12u(mobile)">
							{!! Form::text('prenom', Auth::user()->prenom, $attributes = ['placeholder' => 'Prenom']) !!}
						</div>
						<div class="12u 12u(mobile)">
							{!! Form::text('pseudo', Auth::user()->pseudo, $attributes = ['placeholder' => 'Pseudo']) !!}
						</div>
						<div class="12u 12u(mobile)">
							{!! Form::email('email', Auth::user()->email, $attributes = ['placeholder' => 'Adresse E-mail']) !!}
						</div>
						<div class="12u 12u(mobile)">
							{!! Form::textarea('statut', Auth::user()->statut, $attributes = ['placeholder' => 'Statut de profil']) !!}
						</div>
						<div class="12u 12u(mobile)">
							{!! Form::submit('Enregistrer', ['class' => 'style3']) !!}
						</div>
					</div>
				{!! Form::close() !!}
			@endif
		</div>
	</div>
@endsection