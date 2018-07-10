<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lista de Clientes - ClientSys</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300, 500" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
<?php
include_once "include/navbar.php";
include_once "include/modalLogin.php";
include_once "connection.php";

if (!$logged) {
    header("location:index.php");
}
?>

  <div id="content">
    <div class="container">
      <h1>
        Clientes
      </h1>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">E-mail</th>
            <th scope="col">Telefone</th>
            <th scope="col">Cidade</th>
            <th scope="col">Estado</th>
            <th scope="col">Ações</th>
          </tr>
        </thead>
        <tbody>
<?php
$connection = new CONNECTION();
$lines = $connection->GetClientList();
foreach ($lines as $line) {
    ?>
      <tr>
      <th scope="row"><?php echo $line["id"]; ?></th>
      <td><?php echo $line["name"]; ?></td>
      <td><?php echo $line["email"]; ?></td>
      <td><?php echo $line["phone"]; ?></td>
      <td><?php echo $line["city"]; ?></td>
      <td><?php echo $line["state"]; ?></td>
      <td>
        <a class="btn btn-sm btn-secondary" href="editClient.php?id=<?php echo $line["id"] ?>">Editar</a>
        <a class="btn btn-sm btn-danger" href="client.php?id=<?php echo $line["id"] ?>&action=erase">Apagar</a></td>
      </tr>
    <?php
}
?>
        </tbody>
      </table>

      <a href="registerClient.php"><button class="btn btn-primary float-right">Cadastrar Novo Cliente</button></a>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>

<?php
if ($_GET) {
    $msg = $_GET["msg"];
    include_once "include/msg.php";
}
?>
  <script>
    $("#login-button").click(function(){
        $("#login-box").modal();
    });

    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove();
        });
    }, 1500);
  </script>
</body>

</html>