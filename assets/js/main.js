(function() {
	var map;
	function initialize() {
		var myStyles =[
	    {
        featureType: "poi",
        elementType: "labels",
        stylers: [
          { visibility: "off" }
        ]
	    }
		];

		var isDraggable = $(document).width() > 480 ? true : false;
	  var myLatlng = new google.maps.LatLng(60.19051,24.91441);
	  var mapOptions = {
	    zoom: 13,
	    center: myLatlng,
	    scrollwheel: false,
	    draggable: isDraggable,
	    styles: myStyles
	  }
	  var map = new google.maps.Map(document.getElementById('map'), mapOptions);

	  var marker = new google.maps.Marker({
    	position: myLatlng,
      map: map
	  });

	  google.maps.event.addDomListener(window, "resize", function() {
			var center = map.getCenter();
			google.maps.event.trigger(map, "resize");
			map.setCenter(center);
		});

	  if ($(document).width() < 480) {
			google.maps.event.addListener(map, 'click', function() {
				$('#mobile-map-modal').modal('show');
		  });
		}


	}

	google.maps.event.addDomListener(window, 'load', initialize);

	// Mobiilissa ruokamenun dropdowni vaihtaa tekstiä
	$(".dropdown-menu li a").click(function(){
  	$("#myTabDrop1").html($(this).text() + ' <i class="fa fa-chevron-down"></i>');
 	});


	// Navbarin pienennys rullatessa alaspäin
	if (!$('.navbar').hasClass('smaller')) {
		$(window).scroll(function(){

			var distanceFromTop = $(window).scrollTop(),
					shrinkOn = 200,
					navbar = $('.navbar');

			if (distanceFromTop >= shrinkOn) {
				navbar.addClass('smaller');
			} else {
				if (navbar.hasClass('smaller')) {
					navbar.removeClass('smaller');
				}
			}

	  });
  }

	// Headerin nuoli, joka vie sivua alaspäin
	var menuOffset = 85;
	$(".header--down-btn").click(function(){
  	$('html, body').animate({
    	scrollTop: $('#intro').offset().top - menuOffset
    }, 1000);
 	});
  

})();