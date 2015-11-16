<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
		<title>eHackB registration</title>
		<link rel="stylesheet" href="{{ asset('/vendor/semantic/dist/semantic.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>

		@if (session('message'))
			<div class="ui positive inline cookie nag">
			<span class="title">
			{{ session('message') }}
			</span>
				<i class="close icon"></i>
			</div>
		@endif

		@yield('content')

		<div class="background"></div>

		<script src="{{ asset('/vendor/jquery/dist/jquery.min.js') }}"></script>
		<script src="{{ asset('/vendor/semantic/dist/semantic.min.js') }}"></script>
		<script src="{{ asset('/vendor/vue/dist/vue.js') }}"></script>
		<script src="{{ asset('/js/app.js') }}"></script>
	</body>
</html>