$('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});


$( document ).ready(function() {
	$("#secondary").stick_in_parent();


});