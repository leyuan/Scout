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
$wrong = $_POST['fb_textarea_one'];
$date = $_POST['fb_date'];
$location = $_POST['fb_location'];
$right = $_POST['fb_textarea_two'];

$query = "INSERT INTO Feedback(Name, Contact, Date, Location, Going_Wrong, Going_Right) 
	Values ('".$user_name."','".$user_contact."','".$wrong."','".$date."','".$location."','".$right."') ";
$result = mysql_query($query);

if($result) {
	echo "<p>Thanks for your feedback!</p>";
} else {
	echo $query."<br />";
	echo mysql_errno() . ": " . mysql_error() . "<br />";
	echo "Something is going wrong, please send us an email instead, thanks!";
}
