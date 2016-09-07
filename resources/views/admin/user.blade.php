@extends('default')

@section('content')
	<div class="wrapper style2">
		<div class="title">Liste des utilisateurs</div>
		<div id="highlights" class="container">
			<table>
				<thead>
					<tr>
						<th>Nom</th>
						<th>Prénom</th>
						<th>E-mail</th>
						<th>Grade</th>
						<th>Fonction</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
						<tr>
							<td>{{ $user->nom }}</td>
							<td>{{ $user->prenom }}</td>
							<td>{{ $user->email }}</td>
							<td>{{ $user->grade }}</td>
							<td><a href="#" class="btn-function edit"><i class="fa fa-edit"></i></a><a href="#" class="btn-function delete"><i class="fa fa-trash"></i></a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{{ $users->render() }}
		</div>
	</div>
@endsection