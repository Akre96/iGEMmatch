
$(document).ready(function(){


$("#title").hover(function(){
	$(this).animate({
		border: "1px solid #FF0D02",
		color: "#FF0D02"
		}, 5000,function(){ });
	},function(){
		$(this).animate({
		border: "none",
		color: "#FF0D02"
		}, 5000,function(){ });
	});


});