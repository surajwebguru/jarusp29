<?php
$to="jarusp29@gmail.com";
$subject="Response from website";
$message="I'm very thankful";
$headers="From: jarusp29@users.noreply.github.com";
if (mail($to, $subject, $message, $headers)){
	echo "Mail sent successfully";
}
else{
	echo "Mail cannot sent";
}

?>