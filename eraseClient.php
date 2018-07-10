<?php
    $id = $_GET["id"];

    include_once("connection.php");
    $connection = new CONNECTION();

    $connection->EraseClient($id);

?>