// Created by Wannes Gennar. All rights reserved

$('.ui.checkbox').checkbox();
$('.ui.dropdown').dropdown();

var controller = new Vue({
	el: '.ui.segment',
	data: {
		busy: false
	},
	methods: {
		createTeam: function ()
		{
			$('.small.modal').modal('show');
		}
	}
});

var modal = new Vue({
	el: '.small.modal',
	methods: {
		createTeam: function ()
		{
			controller.busy = true;
		}
	}
});