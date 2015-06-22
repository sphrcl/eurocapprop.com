$(document).ready(function(){
	
	$('.open-detail').click(function(e){
		e.preventDefault()
		$(this).parent().parent('li').addClass('open-details');
		$(this).parent().parent().find('.person-wrapper').fadeIn();
	});
	
	$('.close-button').click(function(){
		$(this).parent().parent().parent().removeClass('open-details');
		$(this).parent().parent().fadeOut();
	});
	
	$('.mem-detail').click(function(e){
		e.preventDefault();
		
		var teamliclass = $(this).attr('class'),
		replaceclass = teamliclass.replace('mem-detail ', ''),
		replaceclass = replaceclass.replace('dropanchor ', ''),
		movewrap = $(this).parent().parent('li').offset().top;
		
		$('.memberwrap.' + replaceclass).fadeIn();
		$('.memberwrap.' + replaceclass).css('top', movewrap);
	});
	
	$('.mem-close').click(function(){
		$('.memberwrap').fadeOut();
	});
	
	
	$(".hiddennav a").click(function(e){
	e.preventDefault();
	    var bion = $("body");
	    if(bion.hasClass('opened'))
	        bion.removeClass('opened');
	    else
	        bion.addClass('opened');
	});
	
	

});
