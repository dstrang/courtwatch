$(function(){
	$("#top-bar span").click(function(){
		$.ajax({
			url:'api/logout',
			type:'GET',
			dataType:'json',
			success:function(){
				window.location.replace("login.php");
			}
		});
	});
});