var Router = Backbone.Router.extend({

	routes: {
		'': 'home',
		'profile': 'profile',
		'volunteers': 'volunteers',
		'forms': 'forms',
		'*path': 'default'
	},

	home: function(){
		App.container.show(new HomeView());
	},
	volunteers: function(){
		App.container.show(new VolunteerPanel());
	},
	profile: function(){
		App.container.show(new ProfilePanel({model:App.user}));
	},
	forms: function(){
		App.container.show(new FormPanel());
	},
	default: function(){
		this.home();
	}
});