@extends('layouts.master')

@section('content')

	<div class="container">
		@foreach($competitions as $competition)
			<div class="card">
				<div class="card-content">
					<span class="card-title">{{ $competition->name }}</span>
					<div class="row">
						<div class="col s12">
							<table>
								<thead>
									<tr>
										<th>Voornaam</th>
										<th>Achternaam</th>
										@if ($competition->teams)
											<th>Team</th>
										@endif
									</tr>
								</thead>

								<tbody>
								@foreach ($competition->users as $user)
									<tr>
										<td>{{ $user->fname }}</td>
										<td>{{ $user->lname }}</td>
										@if ($competition->teams)
											<td>{{ $user->team->name }}</td>
										@endif
									</tr>
								@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

@endsection