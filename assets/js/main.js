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

	}

	google.maps.event.addDomListener(window, 'load', initialize);
})();