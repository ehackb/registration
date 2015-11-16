<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>eHackB registration</title>
		<link rel="stylesheet" href="{{ asset('/vendor/semantic/dist/semantic.min.css') }}">
		<link rel="stylesheet" href="{{ asset('/css/app.css') }}">
	</head>
	<body>
		<div class="background"></div>

		@if (session('message'))
			<div class="ui positive inline cookie nag">
			<span class="title">
			{{ session('message') }}
			</span>
				<i class="close icon"></i>
			</div>
		@endif

		@yield('content')

		<script src="{{ asset('/vendor/jquery/dist/jquery.min.js') }}"></script>
		<script src="{{ asset('/vendor/semantic/dist/semantic.min.js') }}"></script>
		<script src="{{ asset('/vendor/vue/dist/vue.js') }}"></script>
		<script src="{{ asset('/js/app.js') }}"></script>
	</body>
</html>