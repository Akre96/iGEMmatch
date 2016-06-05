
$(document).ready(function(){


$(".step").hover(function(){
	$(this).animate({
		backgroundColor: '#4BA5B6',
		borderColor: '#4BA5B6',

	}, 100)
	},
	function()
	{
	$(this).animate({
		backgroundColor: '#53D16F',
		borderColor: '#53D16F',

	}, 100)

	});


});