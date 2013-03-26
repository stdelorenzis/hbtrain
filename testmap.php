<?php
require 'db.php';
require 'structure.php';

get_header();

//api key: AIzaSyBR2M-GicedlQIdxvVdKuzLS61KA6_jKYI

$sql = "SELECT * FROM checkin";
$res = mysql_query($sql);
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2M-GicedlQIdxvVdKuzLS61KA6_jKYI&sensor=false"></script>
<script type="text/javascript">
var geocoder;
var map;
var infowindow = new google.maps.InfoWindow();
var marker;
function initialize(){
	geocode = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-37.7833, 144.9667);
	var mapOptions = {
		zoom: 8,
		center: latlng
		mapTypeId: google.maps.MapTypeId.ROADMAP
	}
	map = new google.maps.Map(document.getElementById("map-canvas"), mapoptions);

};

function codeLatLng(){
	var input = document.getElementById("latlng").value;
	var latlngstr = input.split(",",2);
	var lat = parseFloat(latlngStr[0]);
	var lng = parseFloat(latlngStr[1]);
	var latlng = new google.maps.LatLng(lat, lng);
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
};

</script>

<div class="row-fluid">
	<div class="span12" id="map-canvas">
	</div>
</div>

<?php
get_footer();
?>