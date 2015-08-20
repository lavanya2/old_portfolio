<?php
    $filename = "Messages.csv";
    $exists = (file_exists($filename));

 	$handle = fopen($filename, 'a');
	$msg = "New Message:"."\n\n";//start of email message to admin
	$stringToAdd="";	//File into

	if (!$exists){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";
		}
		$stringToAdd.="\n";
		$new=False;
		fwrite($handle, $stringToAdd);
	}
	$stringToAdd="";
	foreach($_POST as $name => $value) {
		// print "$name : $value<br>"; don't want to echo each name,value after user hits submit
		$msg .="$name : $value\n";
		$stringToAdd.="$value,";
	}
	$stringToAdd.="\n";

	fwrite($handle, $stringToAdd);
	//now close the file
	fclose($handle); 
	$first_name = $_POST["Firstname"];
	$to = $_POST["Email"]; //User's email
	$msg2= $first_name .", thank you for your message! I will send you a response as soon as I can."."\n\n"."Best, Lavanya Kumar";//message to user


	$from = "lakumar@umich.edu";
	$headers = "From:".$_POST["Firstname"]."<".$_POST["Email"]. ">\r\n";

	mail($to, 'Message Sent!', $msg2); //send mail to user
	mail($from, "New Message", $msg, $headers); //sends mail to admin ($from) and $msg is name value pairs


	echo "Message Sent. Thank you  " . $first_name . "! Please check your email for a confirmation."; //confirmation for user
?>