<!DOCTYPE html>
<html>
	<head>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="{{ asset('/css/materialize.css') }}" media="screen,projection"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	</head>
	<body>

		<div class="container">
			<div class="row">
				<form class="col s12">
					<div class="row">
						<div class="input-field col s6">
							<input placeholder="Placeholder" id="first_name" type="text" class="validate">
							<label for="first_name">First Name</label>
						</div>
						<div class="input-field col s6">
							<input id="last_name" type="text" class="validate">
							<label for="last_name">Last Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input disabled value="I am not editable" id="disabled" type="text" class="validate">
							<label for="disabled">Disabled</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
	</body>
</html>
