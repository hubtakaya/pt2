$(document).ready(function() {
	$(".drawer").drawer();
	$('#back').click(function(){
		$('.drawer').drawer('close');
	});
});

