@extends('default')

@section('content')
	<div class="wrapper style2">
		<div class="title">Posez une question</div>
		<div id="highlights" class="container">
		{!! Form::open(['url' => '/faq/themes/theme', 'method' => 'post']) !!}
			{!! Form::token() !!}
			<div class="row 150%">
				<div class="12u 12u(mobile)">
					{!! Form::text('question', null, $attributes = ['placeholder' => 'Votre question']) !!}
				</div>
				<div class="12u 12u(mobile)">
					{!! Form::text('theme', null, $attributes = ['placeholder' => 'Theme de votre question']) !!}
				</div>
				<div class="12u 12u(mobile)">
					{!! Form::submit('Poster',['class' => 'style3']) !!}
				</div>
			</div>
		{!! Form::close() !!}
	</div>
@stop