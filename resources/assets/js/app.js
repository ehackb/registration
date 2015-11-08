// Created by Wannes Gennar. All rights reserved

$('.ui.checkbox').checkbox();
$('.ui.dropdown').dropdown();

var controller = new Vue({
	el: '.ui.segment',
	data: {
		busy: false,
		status: 'disabled',
		teams: [],
		competitie: null
	},
	created: function ()
	{
		$('#competitie').dropdown({
			onChange: this.loadTeams
		})
	},
	methods: {
		createTeam: function ()
		{
			$('.small.modal').modal('show');
		},
		loadTeams: function ()
		{
			var that = this;
			this.status = 'disabled loading';
			$.get('/competition/' + this.competitie + '/teams').done(function (data)
			{
				that.status = '';
				that.teams = data;
				$('.ui.dropdown').dropdown('setup menu');
			});
		}
	}
});

var modal = new Vue({
	el: '.small.modal',
	methods: {
		submit: function ()
		{
			$('#teamform').submit();
		}
	}
});