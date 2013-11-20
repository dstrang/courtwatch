$(function(){
	$('#container li a').hover(
		function(){
			$(this).next().fadeIn(500);
		},
		function(){
			$(this).next().fadeOut(250);
		});
});