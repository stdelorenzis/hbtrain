<?php
require 'db.php';
require 'structure.php';

get_header();

//api key: AIzaSyBR2M-GicedlQIdxvVdKuzLS61KA6_jKYI

?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2M-GicedlQIdxvVdKuzLS61KA6_jKYI&sensor=false"></script>
<script type="text/javascript">
<?php
			$sql = "SELECT * FROM checkin";
			$res = mysql_query($sql);
			
			echo "var locations = [";
			while ($result = mysql_fetch_array($res))
			{
				$id = $result['id'];
				$latitude = $result['latitude'];
				$longitude = $result['longitude'];
				$name = $result['name'];
				
				$location = "['".$name."', ".$latitude.", ".$longitude.", ". $id."], ";
				echo "$location";	
			}
			
			
			echo "];";
?>

$(document).ready(function(){
	var geocoder;
	var map;
	
	var	map = new google.maps.Map(document.getElementById("map-canvas"), {
			zoom: 10,
			center: new google.maps.LatLng(-37.7833, 144.9667),
			mapTypeId: google.maps.MapTypeId.ROADMAP
	});


	var infowindow = new google.maps.InfoWindow();
	geocoder = new google.maps.Geocoder();

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
		
		
		
});


</script>

<div class="row-fluid">
	<div class="span12" id="map-canvas" style="height: 500px;"> <!--needs a height-->
	</div>
	<div class="span12">
		<script>
		
		</script>
	</div>
</div>

<?php
get_footer();
?>