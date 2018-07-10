<?php
    include_once("connection.php");
    session_start();

    $action = $_GET["action"];

    switch($action){
        case "login":
            $connection = new CONNECTION();

            $email = $_POST["email"];
            $password = $_POST["password"];
            
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
            break;
        case "logout":
            session_destroy();
            header("location:index.php?msg=Logout");
            break;
        default:
            break;
    }  
?>
