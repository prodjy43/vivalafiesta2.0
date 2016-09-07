@extends('default')

@section('content')
	<div class="wrapper style2">
		<div class="title">Inscription</div>
		<div id="highlights" class="container">
			{!! Form::open(['url' => 'account/register', 'method' => 'post']) !!}
				{!! Form::token() !!}
				<div class="row 150%">
					<div class="12u 12u(mobile)">
						<p>Vous inscrire sur le site viva la fiesta vous permettra de <strong>participé</strong> à des événements ou d'<strong>en crée</strong> via l'espace de gestion. Vous pourrez aussi étre abonnées au <strong>Newsletter</strong> du site pour ne manquer aucun événements ou information importantes <br>Vous possédé déjà un compte alors <a href="/account/login">Connetez-vous</a></p>						
					</div>
					<div class="6u 12u(mobile)">
						{!! Form::text('nom', null, $attributes = ['placeholder' => 'Nom']) !!}
					</div>
					<div class="6u 12u(mobile)">
						{!! Form::text('prenom', null, $attributes = ['placeholder' => 'Prenom']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::text('pseudo', null, $attributes = ['placeholder' => 'Pseudo']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::email('email', null, $attributes = ['placeholder' => 'Adresse E-mail']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::password('password', $attributes = ['placeholder' => 'Mot de passe']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::password('confirm', $attributes = ['placeholder' => 'Confirmation mot de passe']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::submit('S\'inscrire', ['class' => 'style3']) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection