<?php 
	include("../include/header.php"); 
	include("../config.php");
	include("../include/function.php");	
	
	if (isset($_GET['long']))
	$longitude = $_GET['long'];
	
	if (isset($_GET['lat']))
		$latitude = $_GET['lat'];
		
	//GET SESSION DETAILS
	
	$userId = $_SESSION['userId'];
	$firstName = $_SESSION['firstName'];
	$lastName = $_SESSION['lastName'];
	

	//CHECK IF USER ALREADY CHECKED IN

	
	$findstatus = "SELECT *  FROM data WHERE UserId = $userId AND DATE(InTime) = DATE(now()) AND status = '1' ";
	
	$result = mysql_query($findstatus);
		
	//RETRIEVE ID OF CHECKED IN DATA
	$result_id = mysql_fetch_array($result);
	$result_id_detail = $result_id['Id'];
	
	//COUNT TO FIND OUT RECORD EXISTS	
	$count = mysql_num_rows($result);

	
	if ($count < 1 ){
		
	// GET LOCATION FUNCTION		
		
	$getlocation = "SELECT Id, SiteName FROM site WHERE
					SiteLat + LatRange > $latitude
					AND SiteLat - LatRange < $latitude
					AND SiteLong + LongRange >$longitude
					AND SiteLong - LongRange < $longitude"	;
	$runquery = mysql_query($getlocation);
	
	$result = mysql_fetch_array($runquery);
	
	$locationId = $result['Id'];
	$location = $result['SiteName'];
	
	$message =  "$firstName $lastName, you have checked in at <br> $location";
	
	
	// UPDATE DATABASE WITH CURRENT INFORMATION

	$insertinformation = "INSERT INTO data (UserId,InTime, SiteNameId, Status) VALUES ($userId,NOW(), $locationId, '1')";
	mysql_query($insertinformation);
	$in_id = mysql_insert_id();
	
	$insertohs = "INSERT INTO ohswarning (Id, TotalHazard, Q1, Q2, Q3, Q4, Q5, Q6, Q7, Q8, Q9,Q10)
VALUES ($in_id, 0, 1,1,1,1,1,1,1,1,1,1)";

	mysql_query($insertohs);
	
	} else {
		$message = "Looks like you have already been checked in here.";
		$in_id = $result_id_detail;
		}
	
	//CHECK OUT BUTTON PATH
		
	$check_out_button = "<a href=\"landing.php?status=1&in_id=$in_id\" class=\"btn btn-large btn-block\">Check Out</a>"	

?>
<body>
<div class="container-fluid">
		<div class="row-fluid centered-content">
  			<div class="span12">
  			<h3>Heartbeat Alerton Australia</h3>
  			</div>
		</div>
		
		<div class="row-fluid centered-content">
      		<div class="span12">
      			<img src="../img/logo.png">
      			<p>
	      			<?php echo $message; ?>
      			</p>
      			
      			<?php echo $check_out_button; ?>
      			<a href="emergency.php" class="btn btn-large btn-block">Emergency</a>

      			
      		</div>
      	</div>

</div>
</body>

<?php include("../include/footer.php"); ?>