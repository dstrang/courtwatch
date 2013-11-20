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
	},
	events: {
		'click .next' : 'nextPage',
		'click .close' : 'closePage'
	},
	nextPage: function(){
		var form = $("#formAccordion");
		var page = form.accordion('option', 'active');
		form.accordion('option','active', (page + 1));
	},
	closePage: function(){
		$('#formAccordion').accordion('option','active', false);
	}
});

var region = new Backbone.Marionette.Region({
  el: "#container"
});

region.show(new FormView());