<?php

include_once('db_conn.php');

// $user_name = 'test_name';
// $user_contact = '780-780-780';
// $wrong = "Nothing is wrong";
// $date = "09/09/2009";
// $location = "Remedy Cafe";
// $right = "Everything is right";

$user_name = $_POST['fb_name'];
$user_contact = $_POST['fb_contact'];
$user_phone = $_POST['fb_phone'];
$wrong = $_POST['fb_textarea_one'];
$date = null;
$location = null;
$right = $_POST['fb_textarea_two'];

//$message = "There was some feedback submitted on the website!.\n".$user_name."\n".$user_contact."\n".$wrong."\n".$right;
//mail("iabarreto11@gmail.com", "New feedback submitted on website!", $message);

$query = "INSERT INTO Feedback(Name, Contact, Date, Location, Going_Wrong, Going_Right) 
	Values ('".$user_name."','".$user_contact."','".$date."','".$location."','".$wrong."','".$right."') ";
$result = mysql_query($query);

if($result) {
	echo "<p>Thanks for your feedback!</p>";
//    $message = "There was some feedback submitted on the website!.\n".$user_name."\n".$user_contact."\n".$wrong."\n".$right;
//    mail("iabarreto11@gmail.com", "New feedback submitted on website!", $message);
} else {
	echo $query."<br />";
	echo mysql_errno() . ": " . mysql_error() . "<br />";
	echo "Something is going wrong, please send us an email instead, thanks!";
}
