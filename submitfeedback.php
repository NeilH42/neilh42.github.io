<?php
	// Open the text file
	$f = fopen("database.txt", "w");
	
	$name=$_REQUEST['FeedbackName'];
	$contact=$_REQUEST['FeedbackContactInfo'];
	$response=$_REQUEST['FeedbackResponse'];
	$contents=$name.', '.$contact.', '.$response.'.';
	
	// Write text
	fwrite($f, $contents); 
	
	// Close the text file
	fclose($f);
	
	// Open file for reading, and read the line
	$f = fopen("database.txt", "r");
	
	// Read text
	echo fgets($f); 
	fclose($f);
?>       