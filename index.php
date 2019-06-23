<?php
$to="jarusp29@gmail.com";
$subject="Resposce from Website";
$message="I'm Very thankful to you";
$headers="jarusp29@users.noreply.github.com";
if (mail($to, $subject, $message, $headers)){

	echo "Mail sent successfuly";

}
else{
	echo "Mail not sent";
}



?>