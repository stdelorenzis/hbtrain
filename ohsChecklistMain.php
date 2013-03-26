<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();
	
?>
<script>
$(document).ready(function(){
<?php
	get_ohsScript();
	close_ohsModal();
?>
});

//ajax
var xmlhttp;
	
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
				document.getElementById("completeChecklists").innerHTML = xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","ohsChecklistTable.php",true); 
		xmlhttp.send(); //sends request to opened page
		
		setTimeout("showEntry()",1000); //use timeout instead of setinterval so that it doesn't start the script over the other one.
	}			

window.onload = showEntry();


</script>
	
	<div class="container-fluid v-background s-container">
  		<div class="row-fluid header">
			<div class="span4"><img class="heart" src="img/heartgif.gif"/></div>
  			<div class="span8 headerText"><h2>Heartbeat Training Centre</h2></div>
   		</div>
		<div class="row-fluid">
			<legend class="text-center"><h3>OHS Checklist</h3></legend>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<!--Button to trigger Modal-->
				<a id="ohsModal" role="button" class="btn btn-block btn-large btn-success">Complete Daily Checklist</a>
			</div>
			<div class="span3"></div>
		</div>
		
		</p>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<div class="text-center"><h4>Completed Checklists</h4></div>
				<table class="table table-bordered" id="completeChecklists">	
				<!--Ajax for completed checklists. Updates automatically like future product-->
				</table>
			</div>
			<div class="span3"></div>
		</div>
		<div class="row-fluid">
			<div class="span3"></div>
			<div class="span6">
				<a class="btn btn-primary btn-block btn-large" href="index.php"><i class="icon-home icon-white"></i>&nbsp&nbspHome</a>
			</div>
			<div class="span3"></div>
		</div>
	</div>
	
	<!--modal popup box-->
	 <div id="ohsChecklist" class="modal hide fade">
		<div class="modal-header">
			<button type="button" class="close ohsModalClose" aria-hidden="true">x</button>
			<h3 id="myModalLabel">OHS Checklist</h3>
			</div>
		<div class="modal-body">
			<form id="ohsChecklistForm" action="ohsChecklist_updb.php" method="post">
				<div id="question">
					<!--OHS questions-->
				</div>
			</form>
		</div>
		<div class="modal-footer">
			<button class="btn btn-danger ohsModalClose" aria-hidden="true">Close</button>
		</div>
	</div>
	
	
	


<?php
	get_footer();
	
?>