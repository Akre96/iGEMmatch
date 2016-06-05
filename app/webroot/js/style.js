
$(document).ready(function(){


$('#title').mouseenter(function () {
    $(this).css({border: '0px solid #FE1C03'}).animate({
        borderWidth: 1
    }, 500);
}).mouseleave(function () {
     $(this).animate({
        borderWidth: 0
    }, 500);
});


});