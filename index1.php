<?php
	//echo "We are very sorry, but there were error(s) found with the form you submitted. ";
	$to = "abraham@wejustgrow.com"; // this is your Email address
	//echo "poteito1";
	$para = $_POST['Email']; // this is the sender's Email address
	//$name = $//_POST['FirstName'];
	//echo "PARA: " . $para;
	$from = "abraham@wejustgrow.com";
	//echo "poteito2";
	$subject = "Solicitud de newsletter";
	//echo "poteito3";
	$subject2 = "Copy of your form submission";
	//echo "poteito4";
	$message = "Han solicitado ser agregados al newsletter, su correo es:" . " $para \n\n";
	//echo "poteito5";
	$message2 = "Here is a copy of your message " . $name . "\n\n";
	//echo "poteito6";
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text; charset=UTF-8' . "\r\n";
	//$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
	$headers .= 'Reply-To: '.$_POST['email'] . "\r\n";
	//$headers = "From:" . $from;
	//echo "poteito7";
	//$headers2 = "From:" . $to;
	//echo "poteito8";
	//ini_set('SMTP', "relay-hosting.secureserver.net");
	//echo "poteito9";
	//ini_set('smtp_port', "25");
	//echo "poteito10";
	if (@mail($to, $subject, $message, $headers)) {
		//echo "Su solicitud ha sido enviada con &eacute;xito.";
		header("Location:http://www.wejustgrow.com");
	}
?>