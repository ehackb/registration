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
					<div class="card">
						<div class="card-content">
							<div class="row">
								<form class="col s12">

									<div class="input-field col s12 m6">
										<input id="last_name" type="text" class="validate">
										<label for="last_name">Voornaam</label>
									</div>
									<div class="input-field col s12 m6">
										<input id="last_name" type="text" class="validate">
										<label for="last_name">Achternaam</label>
									</div>
									<div class="input-field col s12 m7">
										<input id="email" type="email" class="validate">
										<label for="email">Email</label>
									</div>

									<div class="input-field col s12 m5">
										<select multiple>
											<option value="-1" disabled selected>Kies opties</option>
											<option value="1">Ik wil ontbijten</option>
											<option value="2">Ik wil een netwerkkabel kopen</option>
										</select>
										<label>Extra opties (optioneel)</label>
									</div>

									<div class="input-field col s12 m8">
										<select multiple>
											<option value="-1" disabled selected>Kies activiteiten</option>
											<option value="1">Hack corner</option>
											<option value="2">Create corner</option>
											<option value="3">Fifa (1v1)</option>
											<option value="4">Smash Bros WiiU (1v1)</option>
											<option value="5">Hearthstone (1v1)</option>
										</select>
										<label>Duid extra activiteiten aan</label>
									</div>

									<div class="input-field col s12 m4">
										<a class="waves-effect waves-light btn-large">
											Toon competities
										</a>
									</div>

									<div class="input-field col s12 m4">
										<select>
											<option value="1">Ik wil een nieuw team maken</option>
											<option value="2">Ik wil een bestaand team joinen</option>
										</select>
										<label>Kies voor een nieuw of bestaand team</label>
									</div>

									<div class="input-field col s12 m5">
										<input id="team_name" type="text" class="validate">
										<label for="team_name">Naam van het team</label>
									</div>

									<div class="input-field col s12 m3" style="padding-top: 1rem">
										<input type="checkbox" id="test6" />
										<label for="test6">Publiek team</label>
									</div>

									<div class="input-field col s12" style="margin-top: 2rem; margin-bottom: 2rem">
										<input type="range" name="team_size" id="team_size">
										<label for="team_size" style="padding-top: 1rem;">Grootte van het team</label>
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

		<footer class="page-footer hide-on-small-only">
			<div class="footer-copyright">
				<div class="container">
					© 2015 Developed, Designed and cursed by Wannes Gennar
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/nouislider.min.js') }}"></script>
		<script async>
			$(document).ready(function ()
			{
				$('select').material_select();
			});
		</script>
	</body>
</html>
