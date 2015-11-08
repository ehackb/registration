// Created by Wannes Gennar. All rights reserved

$('.ui.checkbox').checkbox();
$('.ui.dropdown').dropdown();

var controller = new Vue({
	el: '.ui.segment',
	data: {
		busy: false,
		status: 'disabled',
		teams: []
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
			$.get('/competition/1/teams').done(function (data)
			{
				that.status = '';
				that.teams = data;
			});
		}
	}
});

var modal = new Vue({
	el: '.small.modal'
});