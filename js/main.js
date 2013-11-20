var App = new Backbone.Marionette.Application();

App.addRegions({
	container: '#container',
	top: '#top-bar',
	volunteerList: '#volunteerList'
});

App.on('initialize:after', function(){
	App.router = new Router();
	Backbone.history.start({
		//pushState: true,
		root: '/courtwatch/'
	});
});

App.addInitializer(function(){
	$.ajax({
		url:'api/getVolunteers',
		type:'GET',
		dataType: 'json',
		success:function(data){
			App.volunteers = new Collection(data);
		}
	});
});

App.addInitializer(function(){
	$.ajax({
		url:'api/loggedIn',
		type:'GET',
		dataType:'json',
		success:function(data){
			if(data){
				App.user = new User(data);
				var model = new TopBarModel(data);
				var top = new TopBarView({ model: model });
				App.top.show(top);
			}
		}
	});
});



	
$(function(){
	App.start();
});
