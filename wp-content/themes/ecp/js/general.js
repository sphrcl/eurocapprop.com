$(document).ready(function(){
	
	$('.open-detail').click(function(e){
		e.preventDefault();
		
		var teamliclass = $(this).attr('class'),
		replaceclass = teamliclass.replace('open-detail ', ''),
		replaceclass = replaceclass.replace('dropanchor ', ''),
		movewrap = $(this).parent().parent('li').offset().top;
		
		$('.memberwrap.' + replaceclass).fadeIn();
		$('.memberwrap.' + replaceclass).css('top', movewrap);
	});

	$('.close-button').click(function(){
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
