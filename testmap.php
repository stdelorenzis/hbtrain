<?php
require 'db.php';
require 'structure.php';

get_header();

//api key: AIzaSyBR2M-GicedlQIdxvVdKuzLS61KA6_jKYI

$sql = "SELECT * FROM checkin";
$res = mysql_query($sql);

while ($result = mysql_fetch_array($res))
{
	
}
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2M-GicedlQIdxvVdKuzLS61KA6_jKYI&sensor=false"></script>
<script type="text/javascript">
var geocoder;
var map;
var infowindow = new google.maps.InfoWindow();
var locations = [	
['Melbourne', -37.7833, 144.9667, 1],
['Manly Beach', -33.80010128657071, 151.28747820854187, 2],
['Maroubra Beach', -33.950198, 151.259302, 1]
];
function initialize(){
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-37.7833, 144.9667);
	var mapOptions = {
		zoom: 8,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
var	map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);

};
var marker, i;

for (i = 0; i < locations.length; i++){
	marker = new google.maps.Marker({
		position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		map: map
	});
	
	google.maps.event.addListener(marker, 'click', (function(marker, i) {
		return function(){
			infowindow.setContent(locations[i][0]);
			infowindow.open(map, marker);
		}
	})(marker, i));
}


/*function codeLatLng(){
		geocoder.geocode({'latLng': latlng}), function(results, status) {
		if (status == google.maps.GeocoderStatus.OK){
			if(results[0]){
				map.setZoom(11);
				marker = new google.maps.Marker({ //new markers
					position: latlng,
					map: map
				});
				infowindow.setContent(results[1].formatted_address);
				infowindow.open(map, marker);
			}
		}else{
			alert("Geocoder failed due to: "+status);
		}
	});
};*/
window.onload = initialize();
</script>

<div class="row-fluid">
	<div class="span12" id="map-canvas" style="width: 500px; height: 500px;"> <!--a is a null error-->
	</div>
</div>

<?php
get_footer();
?>