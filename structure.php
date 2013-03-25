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
				<link href=\"css/bootstrap-responsive.min.css\" rel=\"stylesheet\">    
				<link href=\"css/style.css\" rel=\"stylesheet\" media=\"screen\">
			</head>                                                                    
		<body> 
			<script src=\"http://code.jquery.com/jquery-latest.js\"></script>
			<script src=\"js/bootstrap.js\"></script>
			<script src=\"js/bootstrap.min.js\"></script> ";   
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
						+" 		<div class=\"span12 text-center btn-group\" data-toggle=\"buttons-radio\">\n"
						+" 			<button type=\"button\" class=\"btn btn-large\" id=\"workingOfficeBtnYes\"> Yes </button>\n"
						+"			<button type=\"button\" class=\"btn btn-large\" id=\"workingOfficeButtonNo\"> No </button>\n"
						+"		</div>\n"
						+"	</div>\n"
						+"	<a id=\"btnQ1\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>";
			
		/*				radio buttons while testing buttons		
						+"			<input type=\"radio\" name=\"office\" id=\"workingOfficeYes\" value=\"yes\"> Yes </input>\n"
						+" 			&nbsp&nbsp&nbsp\n"
						+" 			<input type=\"radio\" name=\"office\" id=\"workingOfficeNo\" value=\"no\"> No </input>\n"	*/
						
		//question 2
		var question2 =  "<div class=\"hide\" id=\"question2\">\n"
						+"		<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 8.3%\"></div>\n"
						+"		</div>\n"
						+"	<div class=\"row-fluid\">\n"
						+"		<div class=\"span12\">\n"
						+"			<p class=\"text-center\">What is your job number?</p>\n"
						+" 		</div>\n"
						+"	</div>\n"
						+" 	<div class=\"row-fluid\">\n"
						+" 		
						+" 		
						+"		
						+"		
						+"	</div>\n"
						+"		<a id=\"btnPrev2\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"		<a id=\"btnQ2\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 3	
		var question3 =	"<div class=\"hide\" id=\"question3\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 16.6%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev3\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ3\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 4
		var question4 =	"<div class=\"hide\" id=\"question4\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 25%\"></div>\n"
						+"		</div>\n"
						+"	<a id=\"btnPrev4\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ4\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";

		//question 5
		var question5 =	"<div class=\"hide\" id=\"question5\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 33.3%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev5\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ5\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
						
		//question 6
		var question6 =	"<div class=\"hide\" id=\"question6\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 41.6%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev6\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ6\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 7
		var question7 =	"<div class=\"hide\" id=\"question7\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 50%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev7\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ7\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 8
		var question8 =	"<div class=\"hide\" id=\"question8\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 58.3%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev8\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ8\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 9
		var question9 =	"<div class=\"hide\" id=\"question9\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 66.6%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev9\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ9\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
						
		//question 10
		var question10 ="<div class=\"hide\" id=\"question10\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 74.8%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev10\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ10\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
						
		//question 11
		var question11 ="<div class=\"hide\" id=\"question11\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 83.3%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev11\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ11\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		
		//question 12
		var question12 ="<div class=\"hide\" id=\"question12\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 91.4%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev12\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ12\" class=\"btn btn-primary pull-right\">Next</a>\n"
						+"</div>\n";
		//question 13
		var question13 ="<div class=\"hide\" id=\"question13\">\n"
						+"	<div class=\"progress\">\n"
						+"		<div class=\"bar bar-success\" style=\"width: 100%\"></div>\n"
						+"	</div>\n"
						+"	<a id=\"btnPrev13\" class=\"btn btn-primary pull-left\">Previous</a>\n"
						+"	<a id=\"btnQ13\" class=\"btn btn-success pull-right\">Save</a>\n"
						+"</div>\n";
		
		//onload
		$("#question").append(question1,question2,question3,question4,question5,question6,question7,question8,question9,question10,question11,question12,question13);
		
		//next buttons
		$("#btnQ1").click(function(){
			
			$("#question1").hide();
			$("#question2").show();
		});
		
		
		$("#btnQ2").click(function(){
			
			$("#question2").hide();
			$("#question3").show();
		});
		
		
		$("#btnQ3").click(function(){
			
			$("#question3").hide();
			$("#question4").show();
		});
		
		
		$("#btnQ4").click(function(){
			
			$("#question4").hide();
			$("#question5").show();
		});
		
		
		$("#btnQ5").click(function(){
			
			$("#question5").hide();
			$("#question6").show();
		});
		
	
		$("#btnQ6").click(function(){
			
			$("#question6").hide();
			$("#question7").show();
		});
		
		$("#btnQ7").click(function(){
			
			$("#question7").hide();
			$("#question8").show();
		});
		
		$("#btnQ8").click(function(){
			
			$("#question8").hide();
			$("#question9").show();
		});
		
		$("#btnQ9").click(function(){
			
			$("#question9").hide();
			$("#question10").show();
		});
		
		$("#btnQ10").click(function(){
			
			$("#question10").hide();
			$("#question11").show();
		});
		
		$("#btnQ11").click(function(){
			
			$("#question11").hide();
			$("#question12").show();
		});
		
		$("#btnQ12").click(function(){
			
			$("#question12").hide();
			$("#question13").show();
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
		});
		
		
		
		';
	
	

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
?>
