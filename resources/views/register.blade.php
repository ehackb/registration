<!DOCTYPE html>
<html>
	<head>
		<title>EHACKB³ registratie</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/materialize.css') }}" media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/animate.css') }}" media="all"/>
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/nouislider.min.css') }}" media="screen,projection"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	</head>
	<body>

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
										  <li class="collection-item">- {{ $error }}</li>
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
										<select multiple name="opties">
											<option value="-1" disabled selected>Kies opties</option>
											@foreach ($options as $option)
												<option value="{{ $option->id }}">{{ $option->name }}</option>
											@endforeach
										</select>
										<label>Extra opties (optioneel)</label>
									</div>

									<div class="input-field col s12 m8">
										<select multiple name="activiteiten">
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

									<div class="input-field col s12 m4 animated fadeIn" v-show="showCompetitions">
										<select name="team_optie" v-model="teamOption">
											<option value="-1" disabled selected>Kies een optie</option>
											<option value="1">Nieuw team</option>
											<option value="2">Bestaand team</option>
										</select>
										<label>Kies voor een team</label>
									</div>

									<div class="input-field col s12 m5 animated fadeIn" v-show="showCompetitions">
										<input id="team_naam" name="team_naam" type="text" class="validate">
										<label for="team_naam">Naam of token van het team</label>
									</div>

									<div class="input-field col s12 m3 animated fadeIn" style="padding-top: 1rem"
										 v-show="showCompetitions">
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

		<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/nouislider.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/vue.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
		<script async>
			$(document).ready(function ()
			{
				$('select').material_select();
			});
		</script>
	</body>
</html>
