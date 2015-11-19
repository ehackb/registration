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

		@yield('content')

		<script type="text/javascript" src="{{ asset('/js/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/materialize.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/nouislider.min.js') }}"></script>
		<script type="text/javascript" src="{{ asset('/js/vue.min.js') }}"></script>
		@yield('scripts')
	</body>
</html>
