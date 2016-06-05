
$(document).ready(function(){


$(".step").hover(function(){
	$(this).animate({
		backgroundColor: '#4BA5B6',

	}, 500)
	},
	function()
	{
	$(this).animate({
		backgroundColor: '#53D16F',

	}, 500)
	});


});