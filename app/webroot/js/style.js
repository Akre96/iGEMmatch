
$(document).ready(function(){


$(".step").hover(function(){
	$(this).animate({
		backgroundColor: 'rgba(75, 165, 182,.6)',
		borderColor: '#4BA5B6',

	}, 100)
	},
	function()
	{
	$(this).animate({
		backgroundColor: 'rgba(83, 209, 111,.6)',
		borderColor: '#53D16F',

	}, 100)

	});


});