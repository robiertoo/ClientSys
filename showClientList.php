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
        <div class="col-md-5 float-right">
          <label for="name">
            <strong>Buscar nome</strong>
            <svg version="1.1" class="searchIcon" xmlns="http://www.w3.org/2000/svg" viewBox="76.5 166.5 445.995 445.995">
            <path d="M395.25,447h-20.145l-7.141-6.885C392.955,411.045,408,373.305,408,332.25c0-91.545-74.205-165.75-165.75-165.75
              S76.5,240.705,76.5,332.25S150.705,498,242.25,498c41.055,0,78.795-15.045,107.865-40.035l6.885,7.141v20.145l127.5,127.245
              l37.995-37.995L395.25,447z M242.25,447c-63.495,0-114.75-51.255-114.75-114.75S178.755,217.5,242.25,217.5S357,268.755,357,332.25
              S305.745,447,242.25,447z"/>
            </svg>
          </label>
          <input type="text" class="form-control" name="nameSearch" id="nameSearch" aria-describedby="nameSearchHelp" placeholder="Insira aqui">
        </div>
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
            <th scope="row">
              <?php echo $line["id"]; ?>
            </th>
            <td>
              <?php echo $line["name"]; ?>
            </td>
            <td>
              <?php echo $line["email"]; ?>
            </td>
            <td>
              <?php echo $line["phone"]; ?>
            </td>
            <td>
              <?php echo $line["city"]; ?>
            </td>
            <td>
              <?php echo $line["state"]; ?>
            </td>
            <td>
              <a class="btn btn-sm btn-secondary" href="editClient.php?id=<?php echo $line["id"] ?>">Editar</a>
              <a class="btn btn-sm btn-danger" href="client.php?id=<?php echo $line["id"] ?>&action=erase">Apagar</a>
            </td>
          </tr>
          <?php
}
?>
        </tbody>
      </table>
      <a href="registerClient.php">
        <button class="btn btn-primary float-right">Cadastrar Novo Cliente</button>
      </a>
    </div>
  </div>
  <?php include_once "include/footer.php"?>
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
    $("#login-button").click(function () {
      $("#login-box").modal();
    });
    window.setTimeout(function () {
      $(".alert").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
      });
    }, 1500);
    $("#nameSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $(".table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
  </script>
</body>

</html>