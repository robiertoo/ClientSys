<?php
    include_once("connection.php");

    $connection = new CONNECTION();

    $email = $_POST["email"];
    $password = $_POST["password"];
    session_start();
    try{
        $connect = $connection->Connect();
        $data = $connect->query("SELECT * FROM users");
        foreach($data as $dados){
        }
        echo $dados["password"];
        echo "<br>";
        $data=$connect->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $obj = $data->fetchObject();
        if($obj){
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header("location:index.php?msg=UserSuccess");
        }else{
            unset ($_SESSION['email']);
            unset ($_SESSION['password']);
            header("location:index.php?msg=UserLoginError");
        }
    }catch(PDOException $e){
        echo "Deu erro... ".$e->getMessage();
    }
?>