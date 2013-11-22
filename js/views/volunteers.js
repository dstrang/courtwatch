var VolunteerView = Backbone.Marionette.ItemView.extend({
	el: '#container',
	initialize: function(){
		var view = this;
		$.ajax({
			url:'api/getVolunteers',
			type:'GET',
			dataType: 'json',
			success:function(data){
				if(!data.error){
					appVolunteers = new Collection(data);
					view.showAccordion();
				}
			}
		});
	},
	events: {
		'click #newVolunteerForm .btn': 'addNewVolunteer',
		'click #volunteerAccordion :checkbox': 'promote'
	},
	addNewVolunteer: function(event){
		event.preventDefault();
		var url = 'api/addNewVolunteer';
		var formValues = {
			username: $('#username').val()
		};
		if(!$.trim(formValues.username)){
			alert("must provide user ID");
		}else{
			var view = this;
			$.ajax({
				url:url,
				type:'POST',
				dataType: 'json',
				data:formValues,
				success:function(data){
					if(data.error){
						$('.login-error').text(data.error.text).show();
					}else{
						if(typeof appVolunteers != "undefined"){
							appVolunteers.add(data);
						}else{
							appVolunteers = new Collection(data);
							view.showAccordion();
						}
						$('.login-error').fadeOut();
						$('#volunteerAccordion').accordion('refresh');
					}
				},
				error:function(data){
					console.log(data);
				}
			});
		}	
	},
	promote: function(event){
		var user = {
			username: $(event.currentTarget).next().val()
		};
		$.ajax({
			url:'api/promoteVolunteer',
			type:'POST',
			dataType: 'json',
			data:user,
			success:function(data){
				//console.log(data);
			},
			error:function(data){
				alert("There was an error connecting to the database. Please try again later.");
			}
		});
	},
	showAccordion: function(){
		var list = new Volunteers({collection: appVolunteers});
		region.show(list);
		$('#volunteerAccordion').accordion({
			collapsible: true,
			heightStyle: "content",
			active: false,
			animate: "easeOutExpo"
		});
	}
});

var appVolunteers;

var region = new Backbone.Marionette.Region({
  el: "#volunteerList"
});

var VolunteerModel = Backbone.Model.extend({});

var Collection = Backbone.Collection.extend({
	model: VolunteerModel
});

var Volunteer = Backbone.Marionette.ItemView.extend({
	template: '#admin-volunteer-template'
});

var Volunteers = Backbone.Marionette.CompositeView.extend({
	template: '#admin-volunteers-template',
	itemView: Volunteer,
	appendHtml: function(collectionView, itemView){
		collectionView.$('#volunteerAccordion').append(itemView.el.childNodes);
	}
});

$(function(){
	new VolunteerView();
});

