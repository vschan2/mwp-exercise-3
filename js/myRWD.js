$(function() {
	$('.toggleNav').on('click',function() {
    	$('.nav-flex ul').toggleClass('open');
    	$('.toggleNav').toggleClass('open');
    });
});