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
				<link href=\"bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">    
				<link href=\"bootstrap/css/bootstrap-responsive.min.css\" rel=\"stylesheet\">         
				<link href=\"bootstrap/css/style.css\" rel=\"stylesheet\" media=\"screen\">             
			</head>                                                                    
		<body> ";   
	echo $headerHtml;
		
}
	
function get_footer()
{
	$footerHtml = "
		</body>
	</html>";
	
	echo $footerHtml;
	

}
?>
