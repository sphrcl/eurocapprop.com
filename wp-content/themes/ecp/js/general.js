$(window).load(function() {
	
  $('.homepageslider').flexslider({
    animation: "fade",
    slideshowSpeed:6000,   
	directionNav: false,
  });
  
  $('.flexaccomodations').flexslider({
    animation: "fade",
	controlNav: true, 
	slideshowSpeed:6000, 
	directionNav: false,
  });
  
  $('.flexevents').flexslider({
    animation: "fade",
	controlNav: true,
	slideshowSpeed:6000, 
	directionNav: false,
  });
  
  $('.flexdining').flexslider({
    animation: "fade",
	controlNav: true,
	slideshowSpeed:6000, 
	directionNav: false,
  });
  
  $('.flexspecials').flexslider({
    animation: "fade",
	controlNav: true,
	slideshowSpeed:6000, 
	directionNav: false,
  });
  
  
  $('.exploreslider').flexslider({
    animation: "fade",
  	controlNav: true,
  	slideshowSpeed:6000, 
    directionNav: false,
  });


  /*
  // Vimeo API nonsense
  var player = document.getElementById('player_1');
  $f(player).addEvent('ready', ready);
 
  function addEvent(element, eventName, callback) {
    if (element.addEventListener) {
      element.addEventListener(eventName, callback, false)
    } else {
      element.attachEvent(eventName, callback, false);
    }
  }
 
  function ready(player_id) {
    var froogaloop = $f(player_id);
    froogaloop.addEvent('play', function(data) {
      $('.flexspecials').flexslider("pause");
    });
    froogaloop.addEvent('pause', function(data) {
      $('.flexspecials').flexslider("play");
    });
  }
 
   
  // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
  $(".flexspecials")
    .fitVids()
    .flexslider({
      animation: "slide",
      useCSS: false,
      animationLoop: false,
      smoothHeight: true,
      before: function(slider){
        $f(player).api('pause');
      }
  });
  
  
  */
  
  
});

$(document).ready(function(){
	$(".reservebtn").click(function(){
		$(".reservebox").slideToggle(500);
		$(".xey").addClass("opened");
  });
  
  $(".xey").click(function(){
		$(".reservebox").slideToggle(500);
		$(this).removeClass("openeed");
  });
  
  // $("a[rel^='prettyPhoto']").prettyPhoto();

  $("a[rel^='prettyPhoto']").click(function(e) {
    var href = $(this).attr('href');
    $(href).lightbox_me({
        centered: true, 
        });
    e.preventDefault();
	});

	$('.fa.fa-close').click(function() {
		 $(".lightbox").trigger('close');
	});
	
	
	// Datepicker
		$.datepicker._defaults.dateFormat = 'mm/dd/yy';

		$(".datepicker").datepicker({
			minDate: 0,
			numberOfMonths: [2,1],
			defaultDate: new Date(2015, 09),
			beforeShowDay: function(date) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
				return [true, date1 && ((date.getTime() == date1.getTime()) || (date2 && date >= date1 && date <= date2)) ? "dp-highlight" : ""];
			},
			onSelect: function(dateText, inst) {
				var date1 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#arrival_date").val());
				var date2 = $.datepicker.parseDate($.datepicker._defaults.dateFormat, $("#departure_date").val());
                var selectedDate = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);


                if (!date1 || date2) {
					$("#arrival_date").val(dateText);
					$("#departure_date").val("");
                    $(this).datepicker();
                } else if( selectedDate < date1 ) {
                    $("#departure_date").val( $("#arrival_date").val() );
                    $("#arrival_date").val( dateText );
                    $(this).datepicker();
                } else {
					$("#departure_date").val(dateText);
                    $(this).datepicker();
				}
			}
		});


	 	$(".res").click(function(e) {
			e.preventDefault();
			$(".ressys").addClass("dropit");
			$(".overlay").addClass("doit");
			$(".overlay").addClass("crispy");


		});

		$(".shutdown").click(function(e) {
			e.preventDefault();
			$(".ressys").removeClass("dropit");
			$(".overlay").removeClass("doit");
			$(".overlay").removeClass("crispy");
			$(".sixtynav").removeClass("sixtyopen");
			$(".go").removeClass("gone");

		});
		
		$(".ressys .btn1").click(function(e) {
			e.preventDefault();
			$(".ressys").removeClass("dropit");
			$(".overlay").removeClass("doit");
			$(".overlay").removeClass("crispy");
			$(".sixtynav").removeClass("sixtyopen");
			$(".go").removeClass("gone");

		});

});
