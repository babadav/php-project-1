<?php
	$firstName =  $_POST['firstNameInput'];
	$lastName  =  $_POST['lastNameInput'];
	$phone     =  $_POST['phoneInput'];
	$drink     =  $_POST['drinkInput'];
	$comments  =  $_POST['commentsInput'];
function writeToCsv($first, $last, $phones, $drinks, $comment){
	// my database file 
	$fileName = "guests.csv";
	$fileMode = "a+";
	$date     = date("Y-m-d H:i;s");
	
	$textToWrite = $first.",".$last.",".$phones.",".$drinks.",".$comment."\n";
	
	$handler = fopen($fileName, $fileMode);
	fwrite($handler, $textToWrite);
	fclose($handler);
	
	echo "<br><br> thanks for submitting!";

}
	if(empty($firstName) || empty($lastName) ||empty($phone) ||empty($drink)){
		die("You left a field blank!");
	}


writeToCsv($firstName, $lastName, $phone, $drink, $comments);

	mail("babadav@gmail.com," , "heres my hw", "David Babayev")
?>