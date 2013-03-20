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
				<link hred=\"css/style.css\" rel=\"stylesheet\" media=\"screen\">
			</head>                                                                    
		<body> ";   
	echo $headerHtml;
		
}
	
function get_footer()
{
	$footerHtml = "
			<div class=\"row\">
				<div class=\"span12\">
					Helping Steph learn programming since 2012
				</div>
			<div>
		</body>
	</html>";
	
	echo $footerHtml;
	

}
?>
