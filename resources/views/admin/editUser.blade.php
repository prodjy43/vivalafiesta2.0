@extends('default')

@section('content')
	<div class="wrapper style2">

		<div class="title">{{ $title }}</div>
		<div id="highlights" class="container">
			{!! Form::model($user, ['url' => 'admin/user/edit/'.$user->nom.'-'.$user->prenom, 'method' => 'put']) !!}
				{!! Form::token() !!}
				<div class="row 150%">
					<div class="6u 12u(mobile)">
						{!! Form::text('nom', null, $attributes = ['placeholder' => 'Nom', 'disabled' => 'disabled']) !!}
					</div>
					<div class="6u 12u(mobile)">
						{!! Form::text('prenom', null, $attributes = ['placeholder' => 'Prenom', 'disabled' => 'disabled']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::text('pseudo', null, $attributes = ['placeholder' => 'Pseudo', 'disabled' => 'disabled']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::email('email', null, $attributes = ['placeholder' => 'Adresse E-mail', 'disabled' => 'disabled']) !!}
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::textarea('statut', null, $attributes = ['placeholder' => 'Statut de profil', 'disabled' => 'disabled']) !!}
					</div>
					<div class="12u 12u(mobile)">
						<select name="grade">
							@foreach ($grades as $grade)
								<option value="{{ $grade->id }}" @if ($grade->id == $user->grade_id)
									selected
								@endif>{{ $grade->grade }}</option>
							@endforeach	
						</select>
					</div>
					<div class="12u 12u(mobile)">
						{!! Form::submit('Enregistrer', ['class' => 'style3']) !!}
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection