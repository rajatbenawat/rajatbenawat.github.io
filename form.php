<html>
<head>
	<title>Response Submitted</title>
</head>
<body>
<div style="text-align:center; color:blue;"><h1>I'll Get Your Response!</h1></br><h2>i'll Contact You as soon as possible</h2>
</div>	

<?php 
 $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  
  $email_from = $_POST['email'];
 
    $email_subject = "New Form submission";
 
    $email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message \n".
							
	$to = "rajatagarwal020@gmail.com";
 
  $headers = "From: $email_from \r\n";
 
  $headers .= "Reply-To: $visitor_email \r\n";
 
  mail($to,$email_subject,$email_body,$headers);

	$reply="i have got your mail.I'll contact you ASAP.";
	$email_subject1="I have got your response;";
	$headers = "From: rajatagarwal020@gmail.com \r\n";
	
	
	mail($email_from,$email_subject1,$reply,$headers);
?>

</body>



</html>