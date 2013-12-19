var FormView = Backbone.Marionette.ItemView.extend({
	template: '#admin-forms-template',
	initialize: function(){
		
	},
	onShow: function(){
		$("#formAccordion").accordion({
			collapsible: true,
    		heightStyle: 'content',
    		active: false,
    		animate: 'easeOutExpo'
   		 });
		$('#datePicker').datepicker();
	},
	events: {
		'click .next' : 'nextPage',
		'click .close' : 'closePage',
		'click .more' : 'showHidden',
		'click #fillForm' : 'fillForm',
		'click #submitForm' : 'submitForm'
	},
	nextPage: function(){
		var form = $("#formAccordion");
		var page = form.accordion('option', 'active');
		form.accordion('option','active', (page + 1));
	},
	closePage: function(){
		$('#formAccordion').accordion('option','active', false);
	},
	showHidden: function(event){
		$(event.currentTarget).closest('.hidden').removeClass('hidden');
	},
	fillForm: function(event){
		event.preventDefault();
		$(':text').val("test");
		$(':radio').prop("checked", true);
		$(':checkbox').prop("checked", true);
	},
	submitForm: function(event){
		event.preventDefault();
		var values = $("form").serialize();
		var url = 'api/insertNewForm';
		$.ajax({
			url:url,
			type:'POST',
			dataType: 'json',
			data:values,
			success:function(data){
				if(data.error){
					$('.insert-error').text(data.error.text).show();
				}else{
					console.log(data);
				}
			},
			error:function(data){
				console.log(data);
			}
		});	
	}
});

var region = new Backbone.Marionette.Region({
  el: "#container"
});

region.show(new FormView());