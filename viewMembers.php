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
	
<script type="text/javascript">
	window.onload = showEntry();
</script>
	
	
	<div class="container-fluid">
		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>HEARTBEAT TRAINING CENTRE</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>Registered Memebers</h3></legend>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6" id="memberTable">
			<!--autoupdate database appears here-->
			</div>
			<div class="span3"></div>
		</div>
		</p>
		<!--Nav buttons-->
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<a class="btn btn-success btn-block btn-large" href="newMembers.php"><i class="icon-user icon-white"></i>&nbsp&nbspRegister Now</a>
			</div>
			<div class="span3"></div>
		</div>
		</p>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<a class="btn btn-warning btn-block btn-large" href="index.php"><i class="icon-shopping-cart icon-white"></i>&nbsp&nbspPayment Options</a>
			</div>
			<div class="span3"></div>
		</div>
		</p>
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