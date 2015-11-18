var app = new Vue({
	el: 'body',
	data: {
		showCompetitions: false,
		showTeams: false
	},
	methods: {
		toggleCompetitions: function ()
		{
			this.showCompetitions = !this.showCompetitions;
			if (!this.showCompetitions)
				this.setShowTeams(false);
		},
		setShowTeams: function (show)
		{
			this.showTeams = show;
		}
	}
});
//# sourceMappingURL=app.js.map
