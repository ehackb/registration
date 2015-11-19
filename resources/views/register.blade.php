@extends('layouts.master')

@section('content')
	<div class="container">

		<div class="row hide-on-med-and-down">
			<div class="col s5">&nbsp;</div>
			<div class="col s2 animated fadeInDown">
				<img class="logo" src="{{ asset('/ehackb.png') }}">
			</div>
			<div class="col s5">&nbsp;</div>
		</div>

		<div class="row animated fadeInUp valign-wrapper">
			<div class="col s12 m8 valign">

				@if (sizeof($errors) > 0)
					<div class="row">
						<div class="col s12">
							<div class="card-panel red">
							  <span class="white-text">
								  <ul class="collection">
									  @foreach ($errors->all() as $error)
										  <li class="transparent collection-item">- {{ $error }}</li>
									  @endforeach
								  </ul>
							  </span>
							</div>
						</div>
					</div>
				@endif

				<div class="card">
					<div class="card-content">
						<div class="row">
							<form class="col s12" method="POST" action="{{ route('register') }}">
								{!! csrf_field() !!}

								<div class="input-field col s12 m6">
									<input id="voornaam" name="voornaam" type="text" class="validate">
									<label for="voornaam">Voornaam</label>
								</div>
								<div class="input-field col s12 m6">
									<input id="achternaam" name="achternaam" type="text" class="validate">
									<label for="achternaam">Achternaam</label>
								</div>
								<div class="input-field col s12 m7">
									<input id="email" name="email" type="email" class="validate">
									<label for="email">Email</label>
								</div>

								<div class="input-field col s12 m5">
									<select id="options" multiple name="opties[]">
										<option value="-1" disabled selected>Kies opties</option>
										@foreach ($options as $option)
											<option value="{{ $option->id }}">{{ $option->name }}</option>
										@endforeach
									</select>
									<label>Extra opties (optioneel)</label>
								</div>

								<div class="input-field col s12 m8">
									<select multiple name="activiteiten[]">
										<option value="-1" disabled selected>Kies activiteiten</option>
										@foreach ($activities as $activity)
											<option value="{{ $activity->id }}">{{ $activity->name }}</option>
										@endforeach
									</select>
									<label>Duid extra activiteiten aan</label>
								</div>

								<div class="input-field col s12 m4">
									<a class="waves-effect waves-light btn-large" @click="toggleCompetitions">
									Competitie
									</a>
								</div>

								<div class="input-field col s12" v-show="showCompetitions">
									<select id="competities" name="team_competitie" v-model="teamOption">
										<option value="-1" disabled selected>Kies een optie</option>
										@foreach ($competitions as $competition)
											<option value="{{ $competition->id }}"
													data-teams="{{ $competition->teams }}">{{ $competition->name }}</option>
										@endforeach
									</select>
									<label>Kies een competitie</label>
								</div>

								<!-- TODO show all public teams available if any -->

								<div class="input-field col s12 m8" v-show="showTeams">
									<input id="team_naam" name="team_naam" type="text" class="validate">
									<label for="team_naam">Naam of token van het team</label>
								</div>

								<div class="input-field col s12 m3" style="padding-top: 1rem"
									 v-show="showTeams">
									<input type="checkbox" id="publiek_team" name="publiek_team"/>
									<label for="publiek_team">Publiek team</label>
								</div>

								<div class="col s4 offset-s8 right-align">
									<button class="btn-floating btn-large waves-effect" type="submit" name="action">
										<i class="material-icons">send</i>
									</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
	<script async>
		$(document).ready(function ()
		{
			@if (session('message'))
			Materialize.toast('{{ session('message') }}', 4000);
			@endif
			$('select').material_select();
			$('#competities').material_select(function ()
			{
				app.setShowTeams($('#competities option:selected').attr('data-teams') === '1');
			});
		});
	</script>
@stop