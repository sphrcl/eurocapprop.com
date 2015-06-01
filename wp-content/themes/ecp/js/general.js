$(document).ready(function(){
	
	$('.open-detail').click(function(e){
		e.preventDefault()
		$(this).parent().parent('li').addClass('open-details')
		$(this).parent().parent().find('.person-wrapper').fadeIn()
	})

	$('.close-button').click(function(){
		$(this).parent().parent().parent().removeClass('open-details')
		$(this).parent().parent().fadeOut()
	})

});
