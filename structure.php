<?php

function get_header()
{
                                                                                 
	$headerHtml = "
	<!DOCTYPE html>                                                               
		<html>                                                                        
			<head>                                                                      
				<title>Heartbeat Training</title>                                      
				<meta name=\"viewport\" content=\"width=device-width', initial-scale=1.0\"> 
				<!--bootstrap-->                                                      
				<link href=\"css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">    
				<link href=\"css/bootstrap-responsive.min.css\" rel=\"stylesheet\" media=\"handheld and max-width:960px\">    
				<link href=\"css/style.css\" rel=\"stylesheet\" media=\"screen\">
				<link href=\"css/styleRes.css\" rel=\"stylesheet\" media=\"handheld and max-width: 960px\">
			</head>                                                                    
		<body> 
			<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
			<script src=\"js/bootstrap.js\"></script>
			<script src=\"js/bootstrap.min.js\"></script>";		
	echo $headerHtml;
		
}
	
function get_footer()
{
	$footerHtml = "
			<div class=\"row-fluid footer\">
				<div class=\"span12\">
					Helping Steph learn programming since 2012
				</div>
			</div>
		</body>
	</html>";
	
	echo $footerHtml;
	

}

function get_ohsScript()
{
	$OHSscript = '
			$("#ohsModal").click(function(){
			$("#ohsChecklist").modal();
				
		});
		
		//question 1
		var question1 = "<div class=\"show\" id=\"question1\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 1%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Are you working in the office today?</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q1\" id=\"q1\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" value=\"yes\" id=\"q1BtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" value=\"No\" id=\"q1BtnNo\"> No </button>\n"
						+"		</div>\n"
						+"	</div>\n"
						+"	<a id=\"btnQ1\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>";
			
						
		//question 2
		var question2 =  "<div class=\"hide\" id=\"question2\">\n"
						+"		<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 8.3%\"></div>\n"
						+"		</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Select your Job Number</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid text-center\">\n"
						+" 		<select class=\"text-center\" id=\"q2\" name=\"q2\">\n"
						+" 			<option>Select</option>\n"
						+" 			<option>P1</option>\n"
						+"			<option>P2</option> //this will be downloaded from db \n"
						+"		</select>\n" 
						+"	</div>\n"
						+"	<a id=\"btnPrev2\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ2\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 3	
		var question3 =	"<div class=\"hide\" id=\"question3\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 16.6%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Is your work environment clean and orderly?</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q3\" id=\"q3\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q3BtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" id=\"q3BtnNo\"> No </button>\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q3BtnNA\"> N/A </button>\n"
						+"		</div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev3\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ3\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 4
		var question4 =	"<div class=\"hide\" id=\"question4\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 25%\"></div>\n"
						+"		</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Is there bins availiable for any waste you generate?</p>\n"
						+" 		</div>\n"
						+" 	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q4\" id=\"q4\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q4BtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" id=\"q4BtnNo\"> No </button>\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q4BtnNA\"> N/A </button>\n"
						+"		</div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev4\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ4\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";

		//question 5
		var question5 =	"<div class=\"hide\" id=\"question5\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 33.3%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">If hazardous substances are going to be used, have you been trained on the correct usage precedures?</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q5\" id=\"q5\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q5BtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" id=\"q5BtnNo\"> No </button>\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q5BtnNA\"> N/A </button>\n"
						+"		</div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev5\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ5\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
						
		//question 6
		var question6 =	"<div class=\"hide\" id=\"question6\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 41.6%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Is the correct personal protective equipment (PPE) availiable and have you been trained when to use it?</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q6\" id=\"q6\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q6BtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" id=\"q6BtnNo\"> No </button>\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q6BtnNA\"> N/A </button>\n"
						+"		</div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev6\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ6\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 7
		var question7 =	"<div class=\"hide\" id=\"question7\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 50%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid text-center\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p>Identify any hazards to you or others.</p>\n"
						+" 			<p>Consider these <em>Look Close</em> items</p>\n"
						+" 			<ul>\n"
						+"				<li>Equipment condition </li>\n"
						+"				<li>Working at heights</li>\n"
						+"				<li>Slips, trips and falls</li>\n"
						+"				<li>poor housekeeping</li>\n"
						+"				<li>weather conditions</li>\n"
						+"			</ul>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q7\" id=\"q7\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large btn-warning\" id=\"q7BtnYes\"> The above <em>Look Close</em> items have been considered</button>\n"
						+"		</div>\n"
						+"	</div></p>\n"
						+"	<a id=\"btnPrev7\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ7\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		
		
		//question 8
		var question8 =	"<div class=\"hide\" id=\"question8\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 58.3%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid text-center\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p>Identify any hazards to you or others.</p>\n"
						+" 			<p>Consider these <em>Look-For-the-Hidden</em> items</p>\n"
						+" 			<ul>\n"
						+"				<li>Products and chemicals </li>\n"
						+"				<li>Electricity</li>\n"
						+"				<li>Changes to workforce</li>\n"
						+"				<li>Underground services</li>\n"
						+"				<li>Isolation needed</li>\n"
						+"			</ul>\n"
						+" 		</div>\n"
						+" 	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q8\" id=\"q8\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large btn-warning btn-block\" id=\"q8BtnYes\"> The above <em>Look-For-The-Hidden</em> items have been considered</button>\n"
						+"		</div>\n"
						+"	</div></p>\n"
						+"	<a id=\"btnPrev8\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ8\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 9
		var question9 =	"<div class=\"hide\" id=\"question9\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 66.6%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid text-center\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p>Identify any hazards to you or others.</p>\n"
						+" 			<p>Consider these <em>Look Wide</em> items</p>\n"
						+" 			<ul>\n"
						+"				<li>Spills and leaks</li>\n"
						+"				<li>Blocked access and egress</li>\n"
						+"				<li>Emergency Equipment</li>\n"
						+"				<li>Damaged Equipment</li>\n"
						+"				<li>Other workgroups</li>\n"
						+"			</ul>\n"
						+" 		</div>\n"
						+" 	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q9\" id=\"q9\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large btn-warning\" id=\"q9BtnYes\"> The above <em>Look Wide</em> items have been considered</button>\n"
						+"		</div>\n"
						+"	</div></p>\n"
						+"	<a id=\"btnPrev9\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ9\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
						
		//question 10
		var question10 ="<div class=\"hide\" id=\"question10\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 74.8%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Are there any new hazards Identified?</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid text-center\">\n"
						+"		<input type=\"hidden\" name=\"q10\" id=\"q10\" value=\"-1\"/>\n"
						+"		<textarea rows=\"4\" id=\"q10Btn\"></textarea>\n"
						+" 	</div>\n"
						+"	<a id=\"btnPrev10\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ10\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
						
		//question 11
		var question11 ="<div class=\"hide\" id=\"question11\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 83.3%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Can the job be completed safely?</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q11\" id=\"q11\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q11BtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" id=\"q11BtnNo\"> No </button>\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q11BtnNA\"> N/A </button>\n"
						+"		</div>\n"
						+" 	</div>\n"
						+"	<a id=\"btnPrev11\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ11\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 12
		var question12 ="<div class=\"hide\" id=\"question12\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 91.4%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Are all hazards controls in place for you and all around?</p>\n"
						+" 		</div>\n"
						+" 	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+"		<input type=\"hidden\" name=\"q12\" id=\"q12\" value=\"-1\"/>\n"
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q12BtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" id=\"q12BtnNo\"> No </button>\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"q12BtnNA\"> N/A </button>\n"
						+"		</div>\n"
						+" 	</div>\n"
						+"	<a id=\"btnPrev12\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ12\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		//question 13
		var question13 ="<div class=\"hide\" id=\"question13\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 100%\"></div>\n"
						+"	</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">Save your checklist or return to previous questions?</p>\n"
						+" 		</div>\n"
						+" 	</div>\n"
						+"	<a id=\"btnPrev13\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ13\" class=\"btn btn-success pull-right\">Save</a>\n"
						+"</div>\n";
		
		//onload load all questions
		$("#question").append(question1,question2,question3,question4,question5,question6,question7,question8,question9,question10,question11,question12,question13);
		
		//set all values
		//q1
		$("#q1BtnYes").click(function(){
			$("#q1").val("Yes");
		});
		$("#q1BtnNo").click(function(){
			$("#q1").val("No");
		});
		
		//q3
		$("#q3BtnYes").click(function(){
			$("#q3").val("Yes");
		});
		$("#q3BtnNo").click(function(){
			$("#q3").val("No");
		});
		$("#q3BtnNA").click(function(){
			$("#q3").val("NA");
		});
		
		//q4
		$("#q4BtnYes").click(function(){
			$("#q4").val("Yes");
		});
		$("#q4BtnNo").click(function(){
			$("#q4").val("No");
		});
		$("#q4BtnNA").click(function(){
			$("#q4").val("NA");
		});
		
		//q5
		$("#q5BtnYes").click(function(){
			$("#q5").val("Yes");
		});
		$("#q5BtnNo").click(function(){
			$("#q5").val("No");
		});
		$("#q5BtnNA").click(function(){
			$("#q5").val("NA");
		});
		
		//q6
		$("#q6BtnYes").click(function(){
			$("#q6").val("Yes");
		});
		$("#q6BtnNo").click(function(){
			$("#q6").val("No");
		});
		$("#q6BtnNA").click(function(){
			$("#q6").val("NA");
		});
		
		//q7
		$("#q7BtnYes").click(function(){
			$("#q7").val("Yes");
		});
		
		//q8
		$("#q8BtnYes").click(function(){
			$("#q8").val("Yes");
		});
		
		//q9
		$("#q9BtnYes").click(function(){
			$("#q9").val("Yes");
		});
		
				
		//q11
		$("#q11BtnYes").click(function(){
			$("#q11").val("Yes");
		});
		$("#q11BtnNo").click(function(){
			$("#q11").val("No");
		});
		$("#q11BtnNA").click(function(){
			$("#q11").val("NA");
		});
		
		//q12
		$("#q12BtnYes").click(function(){
			$("#q12").val("Yes");
		});
		$("#q12BtnNo").click(function(){
			$("#q12").val("No");
		});
		$("#q12BtnNA").click(function(){
			$("#q12").val("NA");
		});
		
		
		
		//next buttons
		$("#btnQ1").click(function(){
			var q1Value = $("#q1").val();
			if (q1Value == "-1")
				{
					alert("Select an option");
					return;
				}
			
			if (q1Value == "Yes")
			{
				var c = confirm("Please confirm you\'re working in the office today.")
				if (c==true)
				{
					$("#ohsChecklist").modal("hide");
					$("#ohsChecklistForm").submit()
				}
				if (c==false)
					return;
				
			}
			
			$("#question1").hide();
			$("#question2").show();
		});
		
		
		$("#btnQ2").click(function(){
			var q2Value = $("#q2").val();
			if (q2Value == "Select")
			{
				alert("Select an option");
				return;
			}
			$("#question2").hide();
			$("#question3").show();
		});
		
		
		$("#btnQ3").click(function(){
			var q3Value = $("#q3").val();
			if (q3Value == "-1")
				{
					alert("Select an option");
					return;
				}
				
			$("#question3").hide();
			$("#question4").show();
		});
		
		
		$("#btnQ4").click(function(){
			var q4Value = $("#q4").val();
			if (q4Value == "-1")
				{
					alert("Select an option");
					return;
				}
			$("#question4").hide();
			$("#question5").show();
		});
		
		
		$("#btnQ5").click(function(){
			var q5Value = $("#q5").val();
			if (q5Value == "-1")
				{
					alert("Select an option");
					return;
				}
			$("#question5").hide();
			$("#question6").show();
		});
		
	
		$("#btnQ6").click(function(){
			var q6Value = $("#q6").val();
			if (q6Value == "-1")
				{
					alert("Select an option");
					return;
				}
			$("#question6").hide();
			$("#question7").show();
		});
		
		$("#btnQ7").click(function(){
			var q7Value = $("#q7").val();
			if (q7Value !== "Yes")
				{
					alert("Confirm these Look Close items");
					return;
				}
			$("#question7").hide();
			$("#question8").show();
		});
		
		$("#btnQ8").click(function(){
			var q8Value = $("#q8").val();
			if (q8Value !== "Yes")
				{
					alert("Confirm these Look For The Hidden items");
					return;
				}
			$("#question8").hide();
			$("#question9").show();
		});
		
		$("#btnQ9").click(function(){
			var q9Value = $("#q9").val();
			if (q9Value !== "Yes")
				{
					alert("Confirm these Look Wide items");
					return;
				}
			$("#question9").hide();
			$("#question10").show();
		});
		
		$("#btnQ10").click(function(){
			var q10Value = $("#q10Btn").val();
			$("#q10").val(q10Value);
						
			$("#question10").hide();
			$("#question11").show();
		});
		
		$("#btnQ11").click(function(){
			var q11Value = $("#q11").val();
			if (q11Value == "-1")
				{
					alert("Select an option");
					return;
				}
			$("#question11").hide();
			$("#question12").show();
		});
		
		$("#btnQ12").click(function(){
			var q12Value = $("#q12").val();
			if (q12Value == "-1")
				{
					alert("Select an option");
					return;
				}
			$("#question12").hide();
			$("#question13").show();
		});
		
		$("#btnQ13").click(function(){
			var x = confirm("Are you sure you want to save this checklist?");
			if (x==false)
				return;
			
			if (x == true)
			{
				$("#ohsChecklist").modal("hide");
				$("#ohsChecklistForm").submit();
			}
		});
		
		//previous buttons
		
		$("#btnPrev2").click(function(){
			
			$("#question2").hide();
			$("#question1").show();
		});
		
		
		$("#btnPrev3").click(function(){
			
			$("#question3").hide();
			$("#question2").show();
		});
		
		
		$("#btnPrev4").click(function(){
			
			$("#question4").hide();
			$("#question3").show();
		});
		
		
		$("#btnPrev5").click(function(){
			
			$("#question5").hide();
			$("#question4").show();
		});
		
		
		$("#btnPrev6").click(function(){
			
			$("#question6").hide();
			$("#question5").show();
		});
		
	
		$("#btnPrev7").click(function(){
			
			$("#question7").hide();
			$("#question6").show();
		});
		
		$("#btnPrev8").click(function(){
			
			$("#question8").hide();
			$("#question7").show();
		});
		
		$("#btnPrev9").click(function(){
			
			$("#question9").hide();
			$("#question8").show();
		});
		
		$("#btnPrev10").click(function(){
			
			$("#question10").hide();
			$("#question9").show();
		});
		
		$("#btnPrev11").click(function(){
			
			$("#question11").hide();
			$("#question10").show();
		});
		
		$("#btnPrev12").click(function(){
			
			$("#question12").hide();
			$("#question11").show();
		});
		
		$("#btnPrev13").click(function(){
			$("#question13").hide();
			$("#question12").show();
		});';
	
	

	echo $OHSscript;
}

function close_ohsModal()
{
	$close_ohsModal = '
	
		$(".ohsModalClose").click(function(){
			confirm("Are you sure you want to close? All progress will be lost.");
			$("#ohsChecklist").modal("hide");
			
		});';
	
		
	echo $close_ohsModal;
}

function createMap()
{
	$createMap = '
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
			
			google.maps.event.addListener(marker, "click", (function(marker, i) {
				return function(){
					infowindow.setContent(locations[i][0]);
					infowindow.open(map, marker);
				}
			})(marker, i));
			
		}
	
	
	
	';
	
	echo $createMap;
}

function find_location(){
	$sql = "SELECT * FROM checkin";
	$res = mysql_query($sql);
	
	echo "var locations = [";
	while ($result = mysql_fetch_array($res))
	{
		$id = $result["id"];
		$latitude = $result["latitude"];
		$longitude = $result["longitude"];
		$name = $result["name"];
		
		$location = "['".$name."', ".$latitude.", ".$longitude.", ". $id."], ";
		echo "$location";	
	}
	
	echo "];";
}


function checkinBtn(){
	$checkinBtn = '
	$("#checkInBtn").click(function(){
		
		if ($("#checkinName").val()=="")
			{
				alert("Please enter a name");
				return;
			}
			
		function getLocation()
		{
			if (navigator.geolocation)
			{
				navigator.geolocation.getCurrentPosition(showPosition);
				
			}
			else
			{
				alert("Geolocation is not supported by this browser");
			}
		}
		
		function showPosition(position)
		{
			var latitude = position.coords.latitude;
			var longitude = position.coords.longitude;
			$("#latitude").val(latitude);
			$("#longitude").val(longitude);
			$("form").submit();
		}
		
		getLocation();
		
	});';
	
	echo $checkinBtn;

}
?>
