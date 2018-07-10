<?php
class CONNECTION
{
    public $user = "root";
    public $password = "";
    public $host = "127.0.0.1";
    public $dbname = "clientsys";
    public function Connect()
    {
        $connect = new PDO("mysql:host=$this->host;port=3306;dbname=$this->dbname", $this->user, $this->password);
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connect->exec("set names utf8");
        return $connect;
    }
    public function RegisterUser($email, $name, $userPassword)
    {
        $connection = new CONNECTION();
        try {
            $connect = $connection->Connect();
            $connect->exec("set names utf8");
            $lines = $connect->query("SELECT * FROM users");
            foreach ($lines as $line) {
            }
            if ($email == $line["email"]) {
                header('location:index.php?msg=UserError');
            } else {
                $connect->exec("INSERT INTO users (email, name, password) VALUES ('$email', '$name', '$userPassword')");
                echo "cadastrado com sucesso!";
                session_start();
                $data = $connect->query("SELECT * FROM users WHERE email = '$email' AND password = '$userPassword'");
                $obj = $data->fetchObject();
                if ($obj) {
                    $_SESSION["email"] = $email;
                    $_SESSION["password"] = $userPassword;
                    header("location:index.php?msg=UserSuccess");
                } else {
                    unset($_SESSION["email"]);
                    unset($_SESSION["password"]);
                    header("location:index.php?msg=UserError");
                }
            }
        } catch (PDOException $e) {
            echo "Deu erro... " . $e->getMessage();
        }
    }
    public function RegisterClient($email, $name, $phone, $city, $state)
    {
        $connection = new CONNECTION();
        try {
            $connect = $connection->Connect();
            $connect->exec("set names utf8");
            $lines = $connect->query("SELECT * FROM clients");
            foreach ($lines as $line) {
            }
            if ($email == $line["email"]) {
                header("location:index.php?msg=ClientError");
            } else {
                $connect->exec("INSERT INTO clients (email, name, phone, city, state) VALUES ('$email', '$name', '$phone', '$city', '$state')");
                header("location:showClientList.php?msg=ClientSuccess");
            }
        } catch (PDOException $e) {
            echo "Deu erro... " . $e->getMessage();
        }
    }
    public function GetClientList()
    {
        $connection = new CONNECTION();
        try {
            $connect = $connection->Connect();
            $connect->exec("set names utf8");
            $lines = $connect->query("SELECT * FROM clients");
            return $lines;
        } catch (PDOException $e) {
            echo "Deu erro... " . $e->getMessage();
        }
    }
    public function GetClientInfo($id)
    {
        $connection = new CONNECTION();
        try {
            $connect = $connection->Connect();
            $connect->exec("set names utf8");
            $lines = $connect->query("SELECT * FROM clients WHERE id = $id");
            return $lines;
        } catch (PDOException $e) {
            echo "Deu erro..." . $e->getMessage();
        }
    }
    public function UpdateClient($id, $email, $name, $phone, $city, $state)
    {
        $connection = new CONNECTION();
        try {
            $connect = $connection->Connect();
            $connect->exec("set names utf8");
            $connect->exec("UPDATE clients SET email = '$email', name = '$name', phone = '$phone', city = '$city', state = '$state' WHERE id = $id");
            header("location:showClientList.php?msg=UpdatedClientSuccess");
        } catch (PDOException $e) {
            echo "Deu erro... " . $e->getMessage();
        }
    }
    public function EraseClient($id)
    {
        $connection = new CONNECTION();
        try {
            $connect = $connection->Connect();
            $connect->exec("set names utf8");
            $connect->exec("DELETE FROM clients WHERE id = $id");
            header("location:showClientList.php?msg=ErasedClientSuccess");
        } catch (PDOException $e) {
            echo "Deu erro... " . $e->getMessage();
        }
    }
}
