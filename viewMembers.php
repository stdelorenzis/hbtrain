<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();
?>

	<script>
	var xmlhttp;
		
		function showEntry()
		{
			if (window.XMLHttpRequest) //for every other browser
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
					document.getElementById("memberTable").innerHTML = xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","databaseChange.php",true); 
			xmlhttp.send(); //sends request to opened page
			
			setTimeout("showEntry()",1000); //use timeout instead of setinterval so that it doesn't start the script over the other one.
		}			
	</script>

	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6" id="memberTable">
			<!--autoupdate database appears here-->
			</div>
			<div class="span3"></div>
		</div>
	</div>
	
<?php
	get_footer();
?>