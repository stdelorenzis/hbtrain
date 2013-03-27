<script>
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


</script>