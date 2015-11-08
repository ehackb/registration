@extends('layouts.master')

@section('content')

	<div class="ui centered grid">
		<div class="fourteen wide mobile eight wide tablet six wide computer column center aligned">
			<div class="ui segment">

				<div class="ui inverted active dimmer" v-show="busy">
					<div class="ui text loader">Negociating with server</div>
				</div>

				<form class="ui form" method="POST" action="{{ route('register') }}">
					{!! csrf_field() !!}
					<h4 class="ui dividing header">Persoonlijke gegevens</h4>
					<div class="field">
						<div class="two fields">
							<div class="field">
								<input type="text" name="voornaam" placeholder="Voornaam">
							</div>
							<div class="field">
								<input type="text" name="achternaam" placeholder="Achternaam">
							</div>
						</div>
					</div>
					<div class="field">
						<input type="email" name="email" placeholder="Email adres">
					</div>
					<div class="two fields">
						<div class="six wide field">
							<div class="ui fluid search selection dropdown">
								<input type="hidden" name="competitie">
								<i class="dropdown icon"></i>
								<input class="search">
								<div class="default text">Kies een competitie</div>
								<div class="menu">
									<div class="item" data-value="geen">Ik neem geen deel</div>
									<div class="item" data-value="cs:go">Counter Strike</div>
									<div class="item" data-value="lol">League of Legends</div>
								</div>
							</div>
						</div>
						<div class="six wide field">
							<div class="ui fluid @{{ status }} search selection dropdown">
								<input type="hidden" name="team">
								<i class="dropdown icon"></i>
								<input class="search">
								<div class="default text">Kies een team</div>
								<div class="menu">
									<div v-for="team in teams" class="item">@{{ team }}</div>
								</div>
							</div>
						</div>
						<div class="four wide field">
							<div class="ui basic fluid blue submit button" v-on:click="createTeam">Maak team</div>
						</div>
					</div>
					<div class="field">
						<div class="ui fluid multiple search selection dropdown">
							<input type="hidden" name="options">
							<div class="default text">Extra opties</div>
							<div class="menu">
								<div class="item">Ik wil een netwerk kabel op eHackB kopen</div>
								<div class="item">Ik wil ontbijten op eHackB</div>
							</div>
						</div>
					</div>
					<button class="ui green basic submit button" tabindex="0">Registreren</button>
				</form>

				@if (count($errors) > 0)
					<div class="ui small warning icon message">
						<i class="close icon"></i>
						<i class="warning circle icon"></i>

						<div class="content">
							<div class="ui list">
								@foreach ($errors->all() as $error)
									<div class="item">
										<div class="left floated content">
											{{ $error }}
										</div>
									</div>
								@endforeach
							</div>
						</div>
					</div>
				@endif

			</div>
		</div>
	</div>

	<div class="ui small second coupled modal">
		<div class="header">
			Maak een nieuw team
		</div>
		<div class="content">

			<form class="ui form">
				<div class="two fields">
					<div class="field">
						<div class="ui fluid search selection dropdown">
							<input type="hidden" name="team" id="teams">
							<i class="dropdown icon"></i>
							<input class="search">
							<div class="default text">Kies een team</div>
							<div class="menu">
								<div v-for="team in teams" class="item">@{{ team }}</div>
							</div>
						</div>
					</div>
					<div class="field">
						<input type="number" min="3" max="8" value="3" placeholder="Aantal teamleden">
					</div>
				</div>
			</form>

		</div>
		<div class="actions">
			<div class="ui green basic approve button" v-on:click="createTeam">
				<i class="checkmark icon"></i>
				Opslaan
			</div>
		</div>
	</div>

@stop