<?php 
	include_once("connection.php");
	
	$connection = new CONNECTION();

    $id = $_GET["id"];

	$email = $_POST['email'];
	$name = $_POST['name'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $state = $_POST['state'];

	$connection->UpdateClient($id, $email, $name, $phone, $city, $state);
?>