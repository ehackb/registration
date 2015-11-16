@extends('layouts.master')

@section('content')

	<div class="ui centered grid">
		<div class="sixteen wide mobile fourteen wide tablet six wide computer column center aligned">
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
							<div class="ui fluid search selection dropdown" id="competitie">
								<input type="hidden" name="competitie" v-model="competitie">
								<i class="dropdown icon"></i>
								<input class="search">
								<div class="default text">Kies een competitie</div>
								<div class="menu">
									@foreach ($competitions as $competition)
										<div class="item" data-value="{{ $competition->id }}">{{ $competition->name }}</div>
									@endforeach
								</div>
							</div>
						</div>
						<div class="six wide field">
							<div class="ui fluid @{{ status }} search selection dropdown">
								<input type="hidden" name="team" v-model="team">
								<i class="dropdown icon"></i>
								<input class="search">
								<div class="default text">Kies een team</div>
								<div class="menu">
									<div v-for="team in teams" class="item" data-value="@{{ team.id }}">@{{ team.name }}</div>
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
								<div class="item" data-value="1">Ik wil een netwerk kabel op eHackB kopen</div>
								<div class="item" data-value="2">Ik wil ontbijten op eHackB</div>
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

			<form class="ui form" id="teamform" action="{{ route('register.team') }}" method="POST">
				{!! csrf_field() !!}

				<div class="field">
					<input type="text" name="naam" placeholder="Team naam">
				</div>

				<div class="two fields">
					<div class="field">
						<div class="ui fluid search selection dropdown">
							<input type="hidden" name="competition">
							<i class="dropdown icon"></i>
							<input class="search">
							<div class="default text">Kies een competitie</div>
							<div class="menu">
								@foreach ($competitions as $competition)
									<div class="item" data-value="{{ $competition->id }}">{{ $competition->name }}</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="field">
						<input type="number" min="3" max="8" value="3" name="team_grootte" placeholder="Aantal teamleden">
					</div>
				</div>
			</form>

		</div>
		<div class="actions">
			<button class="ui green basic approve button" v-on:click="submit">
				<i class="checkmark icon"></i>
				Opslaan
			</button>
		</div>
	</div>

@stop