<script>
<?php
	$today = date("Y-m-d");
	$sql = "SELECT * FROM checkin WHERE date = $today";
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


</script>