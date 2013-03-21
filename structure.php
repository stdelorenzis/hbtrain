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
?>
