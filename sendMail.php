<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FWFGhana.org</title>
</head>

<body>




<?php
if(isset($_REQUEST['email'])){
	
	$adm_email="contact@fwfghana.org";
	$email= $_REQUEST['email'];
	$name= $_REQUEST['name'];
	
	mail($adm_email,  $name, "From:".$email)
	;
	
	echo "Thank you for contacting us!";

	}

?>
</body>
</html>