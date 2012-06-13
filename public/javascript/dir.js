function inputFocus(i){
    if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
}
function inputBlur(i){
    if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
}

var directionDisplay;

	var directionsService = new google.maps.DirectionsService();

	function initialize() {

		var latlng = new google.maps.LatLng(40.7210981,-74.1714821);

		directionsDisplay = new google.maps.DirectionsRenderer();

		var myOptions = {

			zoom: 14,

			center: latlng,

			mapTypeId: google.maps.MapTypeId.ROADMAP,

			mapTypeControl: false

		};

		var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);

		directionsDisplay.setMap(map);

		directionsDisplay.setPanel(document.getElementById("directionsPanel"));

		var marker = new google.maps.Marker({

			position: latlng, 

			map: map, 

			title:"Ecua Henivad Body Shop"

		}); 
			
		var contentString = 'Ecua Henivad Body Shop <br/> 218 Thomas St, Newark, NJ 07114 <br/> 973-877-0905';
		var infowindow = new google.maps.InfoWindow({
        content: contentString
		});
	
		google.maps.event.addListener(marker, 'click', function() {
      infowindow.open(map,marker);
		});
		
	}
	
	function calcRoute() {

		var start = document.getElementById("routeStart").value;

		var end = "40.7210981,-74.1714821";

		var request = {

			origin:start,

			destination:end,

			travelMode: google.maps.DirectionsTravelMode.DRIVING

		};

		directionsService.route(request, function(response, status) {

			if (status == google.maps.DirectionsStatus.OK) {

				directionsDisplay.setDirections(response);

			} else {

				if (status == 'ZERO_RESULTS') {

					alert('No route could be found between the origin and destination.');

				} else if (status == 'UNKNOWN_ERROR') {

					alert('A directions request could not be processed due to a server error. The request may succeed if you try again.');

				} else if (status == 'REQUEST_DENIED') {

					alert('This webpage is not allowed to use the directions service.');

				} else if (status == 'OVER_QUERY_LIMIT') {

					alert('The webpage has gone over the requests limit in too short a period of time.');

				} else if (status == 'NOT_FOUND') {

					alert('At least one of the origin, destination, or waypoints could not be geocoded.');

				} else if (status == 'INVALID_REQUEST') {

					alert('The DirectionsRequest provided was invalid.');					

				} else {

					alert("There was an unknown error in your request. Requeststatus: \n\n"+status);

				}

			}

		});

	}