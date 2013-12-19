// var LoginView = Backbone.Marionette.ItemView.extend({
// 	template: '#login-template',
// 	events: {
// 		'click #loginForm .btn': 'login'
// 	},
// 	login: function(event){
// 		event.preventDefault();
// 		$('.login-error').hide();
// 		var url = 'api/login';
// 		var formValues = {
// 			username: $('#username').val(),
// 			password: $('#password').val()
// 		};
// 		$.ajax({
// 			url:url,
// 			type:'POST',
// 			dataType: 'json',
// 			data:formValues,
// 			success:function(data){
// 				if(data.error){
// 					$('.login-error').text(data.error.text).show();
// 				}else{
// 					App.user.set("loggedIn", true);
// 					App.router.navigate("/", {trigger:true});
// 				}
// 			}
// 		});
// 	}
// });

$(function(){
	$('#loginForm .btn').click(function(event){
		event.preventDefault();
		$('.login-error').hide();
		var url = 'api/login';
		var formValues = {
			username: $('#username').val(),
			password: $('#password').val()
		};
		$.ajax({
			url:url,
			type:'POST',
			dataType: 'json',
			data:formValues,
			success:function(data){
				if(data.error){
					$('.login-error').text(data.error.text).show();
				}else{
					window.location.replace("./");
				}
			}
		});
	});
});