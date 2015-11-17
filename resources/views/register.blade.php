<!DOCTYPE html>
<html>
	<head>
		<title>EHACKB³ registratie</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/materialize.css') }}" media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/animate.css') }}" media="all"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
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

			<div class="row animated fadeInUp">
				<div class="col s12">
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
									<div class="input-field col s12 m6">
										<input id="email" type="email" class="validate">
										<label for="email">Email</label>
									</div>

									<div class="input-field col s12 m6">
										<select multiple>
											<option value="-1" disabled selected>Kies opties</option>
											<option value="1">Ik wil ontbijten</option>
											<option value="2">Ik wil een netwerkkabel kopen</option>
										</select>
										<label>Extra opties (optioneel)</label>
									</div>

									<button class="btn-floating btn-large waves-effect right" type="submit" name="action">
										<i class="material-icons">send</i>
									</button>

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer class="page-footer">
			<div class="footer-copyright">
				<div class="container">
					© 2015 Developed, Designed and cursed by Wannes Gennar
				</div>
			</div>
		</footer>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script async>
			$(document).ready(function() {
				$('select').material_select();
			});
		</script>
	</body>
</html>
