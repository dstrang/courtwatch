var FormView = Backbone.Marionette.ItemView.extend({
	template: '#admin-forms-template',
	initialize: function(){
		
	},
	onShow: function(){
		$("#formAccordion").accordion({
			collapsible: true,
    		heightStyle: 'content',
    		active: 1,
    		animate: 'easeOutExpo'
   		 });
		$('#datePicker').datepicker();
	},
	events: {
		'click .next' : 'nextPage',
		'click .close' : 'closePage',
		'click .more' : 'showHidden',
		'click #fillForm' : 'fillForm'
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
	fillForm: function(){
		$(':text').val("test");
		$(':radio').prop("checked", true);
		$(':checkbox').prop("checked", true);
	}
});

var region = new Backbone.Marionette.Region({
  el: "#container"
});

region.show(new FormView());