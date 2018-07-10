<?php
$id = $_GET["id"];
$action = $_GET["action"];
include_once "connection.php";
$connection = new CONNECTION();
switch ($action) {
    case "register":
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $connection->RegisterClient($email, $name, $phone, $city, $state);
        break;
    case "update":
        $email = $_POST['email'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $connection->UpdateClient($id, $email, $name, $phone, $city, $state);
        break;
    case "erase":
        $connection->EraseClient($id);
        break;
    default:
        break;
}
