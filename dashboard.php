<?php
	require 'db.php';
	require 'structure.php';
	
	date_default_timezone_set("Australia/Melbourne");
	$time = date("H:i:s");
	$date = date("Y/m/d");
	
	get_header();

?>
	<script>
	//ajax
	var xmlhttp;
	var xmlhttpDateTime;
		
		function showEntry()
		{
			if (window.XMLHttpRequest)
			{
				xmlhttp=new XMLHttpRequest();
				xmlhttpDateTime = new XMLHttpRequest();
			}
			else
			{
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); //ie5 + 6
				xmlhttpDateTime = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange=function()
			{
			if (xmlhttp.readyState == 4 && xmlhttp.status==200) //request finished and response  
				{
					document.getElementById("hbCcheckedIn").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","hbCheckedIn.php",true); 
			xmlhttp.send(); //sends request to opened page
			
			xmlhttpDateTime.onreadystatechange=function(){
				if (xmlhttpDateTime.readyState == 4 && xmlhttpDateTime.status==200)
				{
					document.getElementById("dateTime").innerHTML = xmlhttpDateTime.responseText;
				}
			}
			xmlhttpDateTime.open("POST","dateTime.php",true);
			xmlhttpDateTime.send();
			
			setTimeout("showEntry()",1000); //use timeout instead of setinterval so that it doesn't start the script over the other one.
		}			

	window.onload = showEntry();
	</script>
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header headerText">
			<div class="span1"></div>
			<div class="span5">
				<h2>Heartbeat 1.0</h2>
				</br>
				<h4 id="dateTime"></h4>
			</div>
			<div class="span5"><img class="pull-right img-rounded" src="img/logo.png"/></div>
			<div class="span1"></div>
   		</div>
		</p>
		<div class="row-fluid">
			<div class="span1"></div>
			<div class="span10">
			<table class="table table-striped table-bordered">
				<tr>
					<th>Last Name</th>
					<th>First Name</th>
					<th>Time</th>
					<th>Loaction</th>
					<th>Status</th>
				</tr>
				<tr id="hbCheckedIn">
				</tr>
			</table>
			</div>
			<div class="span1"></div>
		</div>
	</div>
<?php
	get_footer();
?>