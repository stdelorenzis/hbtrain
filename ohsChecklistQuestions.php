<?php
	require 'db.php';
	require 'structure.php';
	
	get_header();

?>
<script>
	$(document).ready(function(){
	
		var question1 = "<div id=\"question1\">\n"
						+		"<div class=\"progress\">\n"
						+			"<div class=\"bar bar-success\" style=\"width: 1%\"></div>\n"
						+		"</div>\n"
						+		"<a id=\"btnQ1\" class=\"btn btn-primary\">Next</a>\n"
						+	"</div>"
		$("#question").append(question1);
		
		//question 2
		$("#btnQ1").click(function(){
			var question2 =  "<div id=\"question2\">\n"
						+		"<div class=\"progress\">\n"
						+			"<div class=\"bar bar-success\" style=\"width: 8.3%\"></div>\n"
						+ 	 	"</div>\n"
						+	 	"<a id=\"btnQ2\" class=\"btn btn-primary\">Next</a>\n"
						+	"</div>\n";
			$("#question").empty();
			$("#question").append(question2);
		});
		
		//question 3
		$("#btnQ2").click(function(){
			var question3 =	"<div id=\"question3\">\n"
						+		"<div class=\"progress\">\n"
						+			"<div class=\"bar bar-success\" style=\"width: 16.6%\"></div>\n"
						+ 	 	"</div>\n"
						+	 	"<a id=\"btnQ3\" class=\"btn btn-primary\">Next</a>\n"
						+	"</div>\n";
			$("#question").empty();
			$("#question").append(question3);
		});
		
		//question 4
		$("#btnQ3").click(function(){
			var question4 =	"<div id=\"question4\">\n"
						+		"<div class=\"progress\">\n"
						+			"<div class=\"bar bar-success\" style=\"width: 25%\"></div>\n"
						+ 	 	"</div>\n"
						+	 	"<a id=\"btnQ4\" class=\"btn btn-primary\">Next</a>\n"
						+	"</div>\n";
			$("#question").empty();
			$("#question").append(question4);
		});
		
		//question 5
		$("#btnQ4").click(function(){
			var question5 =	"<div id=\"question5\">\n"
						+		"<div class=\"progress\">\n"
						+			"<div class=\"bar bar-success\" style=\"width: 33.3%\"></div>\n"
						+ 	 	"</div>\n"
						+	 	"<a id=\"btnQ5\" class=\"btn btn-primary\">Next</a>\n"
						+	"</div>\n";
			$("#question").empty();
			$("#question").append(question5);
		});
		
		//question 6
		$("#btnQ5").click(function(){
			var question6 =	"<div id=\"question6\">\n"
						+		"<div class=\"progress\">\n"
						+			"<div class=\"bar bar-success\" style=\"width: 41.6%\"></div>\n"
						+ 	 	"</div>\n"
						+	 	"<a id=\"btnQ6\" class=\"btn btn-primary\">Next</a>\n"
						+	"</div>\n";
			$("#question").empty();
			$("#question").append(question6);
		});
		
		//question 7
		$("#btnQ6").click(function(){
			var question7 =	"<div id=\"question7\">\n"
						+		"<div class=\"progress\">\n"
						+			"<div class=\"bar bar-success\" style=\"width: 50%\"></div>\n"
						+ 	 	"</div>\n"
						+	 	"<a id=\"btnQ7\" class=\"btn btn-primary\">Next</a>\n"
						+	"</div>\n";
			$("#question").empty();
			$("#question").append(question7);
		});
		
	});
	</script>
	
	<div id="question">
	<div>