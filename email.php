<?php 
	if(isset($_POST['submit'])){
	$to = "tjtoth1994@gmail.com"; // Your email
	$from = $_POST['email']; // sender's Email address
	$fName = $_POST['fName']; // fullname
	$message = $_POST['message']; //typed message
	$pNum = $_POST['phone']; //phone number
	$msg = <<<EMAILMESSAGE

$message

FROM

$fName
$from
$pNum
EMAILMESSAGE;

	mail($to,$fName,$msg);
	}
?>