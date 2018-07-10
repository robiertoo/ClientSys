<?php 
	include_once("connection.php");
	
	$connection = new CONNECTION();

	$email = $_POST['email'];
	$name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];

	$connection->RegisterClient($email, $name, $phone, $city, $state);
?>