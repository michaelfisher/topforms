<?php

//Desired recipient
$recipient = "Michael Fisher <michael@thefisherhome.net>";

//Assign fields to variables
$name = strip_tags($_POST["name"]);
$sender = strip_tags($_POST["email"]);
$message = strip_tags($_POST["message"]);
 
//Verify the fileds are not empty
if (!empty ($_POST["name"])
	&& !empty ($_POST["email"])
	&& !empty ($_POST["message"])
) {
	 
	//Compile components of the email
	$headers = 	"From: Top Forms <no-reply@topforms.com>\n";
	$headers .= "Reply-To: $sender";

	$subject = 	"New Message From: $name";
	$body = 		"Name: $name\n".
							"Email: $sender\n\n".
							"Message:\n\n".
							"$message";

	//Send the email
	mail($recipient,$subject,$body,$headers);

	//Save POSTed data to success logfile
	$logfile = 	fopen("contact-form-success.log","a");
	$logtext = 	date("Y-m-d H:i:s")."\n".
				$name."\n".
				$sender."\n".
				$message."\n".
				"-------------------------"."\n";

	fwrite($logfile, $logtext);
	fclose($logfile);

	//Print success message
	echo "<span class=\"alert alert-success fade in\" >Message Sent!</span>";
	
	}

else {

	//Save POSTed data to failed logfile
	$logfile = 	fopen("contact-form-failed.log","a");
	$logtext = 	date("Y-m-d H:i:s")."\n".
				$name."\n".
				$sender."\n".
				$message."\n".
				"-------------------------"."\n";

	fwrite($logfile, $logtext);
	fclose($logfile);

	//Print error message
	echo "<span class=\"alert alert-danger fade in\" >Message Failed!</span>";

}

?>
