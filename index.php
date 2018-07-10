<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ClientSys</title>
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
$connection = new CONNECTION();
$connection->Connect();
?>
  <div id="content">
    <div class="container">
      <h1>
        ClientSys
      </h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae fuga similique saepe autem expedita quasi? Aspernatur voluptates
        harum exercitationem sed molestiae doloribus unde tenetur? Asperiores hic obcaecati fugit accusantium quas!
      </p>
      <a href="registerUser.php">
        <button class="btn btn-success float-right">Cadastre-se!</button>
      </a>
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
    $("#login-button").click(function () {
      $("#login-box").modal();
    });
    window.setTimeout(function () {
      $(".alert").fadeTo(500, 0).slideUp(500, function () {
        $(this).remove();
      });
    }, 1500);
  </script>
</body>

</html>