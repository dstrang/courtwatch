var ProfileView = Backbone.Marionette.ItemView.extend({
	el: '#container',
	initialize: function(){
		$.ajax({
			url:'api/getProfile',
			type:'GET',
			dataType: 'json',
			success:function(data){
				//console.log(data);
				var user = new User(data);
				var profile = new Profile({model:user});
				region.show(profile);
			}
		});
	},
	events: {
		'click #profileEdit' : 'edit'
	},
	edit: function(event){
		var button = $(event.currentTarget);
		if(button.text() == "Edit"){
			button.text("Done");
			$('#profilePanel span').toggleClass('hidden');
			$('#profilePanel input').toggleClass('hidden');
		}else{
			var formValues = {
				email: $('#profileEmail input').val(),
				phone: $('#profilePhone input').val(),
				name: $('#profileName input').val()
			};
			$.ajax({
				url:'api/updateProfile',
				type:'POST',
				dataType: 'json',
				data:formValues,
				success:function(data){
					button.text("Edit");
					$('#profileName span').text(formValues.name);
					$('#profilePhone span').text(formValues.phone);
					$('#profileEmail span').text(formValues.email);
					$('#profilePanel span').toggleClass('hidden');
					$('#profilePanel input').toggleClass('hidden');
				}
			});
		}
	}
});

var region = new Backbone.Marionette.Region({
  el: "#container"
});

var User = Backbone.Model.extend({});

var Profile = Backbone.Marionette.ItemView.extend({
	template: '#profile-template',
	id: 'profilePanel',
});

$(function(){
	new ProfileView();
});