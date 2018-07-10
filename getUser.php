<?php
include_once "connection.php";

$connection = new CONNECTION();

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

$connection->RegisterUser($email, $name, $password);
