<?php
require 'db.php';
require 'structure.php';

get_header();
?>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBR2M-GicedlQIdxvVdKuzLS61KA6_jKYI&sensor=false"></script>
<script>
//find location
$(document).ready(function(){
	
<?php 
	checkinBtn();
	find_location();
	createMap();
?>
});
	
	//ajax
	//Doesn't work yet. Can update the location but markers don't update.
	/*var xmlhttp;
	
	function showEntry()
	{
		if (window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); //ie5 + 6
		}
		
		xmlhttp.onreadystatechange=function()
		{
		if (xmlhttp.readyState == 4 && xmlhttp.status==200) //request finished and response  
			{
				document.getElementById("mapDiv").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","mapUpdate.php",true); 
		xmlhttp.send(); //sends request to opened page
		
		setTimeout("showEntry()",1000); //use timeout instead of setinterval so that it doesn't start the script over the other one.
	}	
	
	showEntry();*/
	
</script>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>Track Members</h3></legend>
		</div>
		<div class="row-fluid">	
			<div class="span3"></div>
			<div class="span6 text-center">
				<form method="post" action="checkin_indb.php">
					<input name="checkinName" id="checkinName" value="" type="text" placeholder="Type your name here">
					<input type="hidden" name="latitude" id="latitude" value="-1">
					<input type="hidden" name="longitude" id="longitude" value="-1">
				</form>
				<a id="checkInBtn" class="btn btn-success btn-block btn-large">Check In</a>
			</div>
			<div class="span3"></div>
		</div>
		</p>
		<div class="row-fluid">
			<div class="span1"></div>
				<div class="span10">
					<div id="mapDiv">
					</div>
					<div id="map-canvas" style="width:100%; height:500px;">
						<!-- map here-->
					</div>
				</div>
			<div class="span1"></div>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<a class="btn btn-primary btn-block btn-large" href="index.php"><i class="icon-home icon-white"></i>&nbsp&nbspHome</a>
			</div>
			<div class="span3"></div>
		</div>
	</div>

<?php
get_footer();
?>