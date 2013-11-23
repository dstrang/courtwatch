var FormView = Backbone.Marionette.ItemView.extend({
	template: '#admin-forms-template',
	initialize: function(){
		
	},
	onShow: function(){
		$("#formAccordion").accordion({
			collapsible: true,
    		heightStyle: 'content',
    		active: 0,
    		animate: 'easeOutExpo'
   		 });
		$('#datePicker').datepicker();
	},
	events: {
		'click .next' : 'nextPage',
		'click .close' : 'closePage',
		'click .more' : 'showHidden'
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
	}
});

var region = new Backbone.Marionette.Region({
  el: "#container"
});

region.show(new FormView());