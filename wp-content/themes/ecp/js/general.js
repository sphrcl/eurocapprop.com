$(document).ready(function(){
	
	$('.open-detail').click(function(e){
		e.preventDefault()
		$(this).parent().parent().addClass('open-details')
		$(this).parent().parent().find('.person-wrapper').fadeIn()
	})

	$('.close-button').click(function(){
		$(this).parent().parent().parent().removeClass('open-details')
		$(this).parent().parent().fadeOut()
	})
	
	
	$(".hiddennav a").click(function(e){
	e.preventDefault();
	    var bion = $("body");
	    if(bion.hasClass('opened'))
	        bion.removeClass('opened');
	    else
	        bion.addClass('opened');
	});
	
	

});
