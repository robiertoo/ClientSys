<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Cliente - ClientSys</title>
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
$id = $_GET["id"];
$connection = new CONNECTION();
$lines = $connection->GetClientInfo($id);
foreach ($lines as $line) {
}
?>
    <div id="register">
        <div class="container">
            <h1>Insira os dados do cliente!</h1>
            <form method="post" action="client.php?id='<?php echo $id ?>'&action=update">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" value="<?php echo $line["name"] ?>" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" value="<?php echo $line["email"] ?>" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="phone" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" value="<?php echo $line["phone"] ?>" required>
                </div>
                <div class="form-row">
                    <div class="col">
                    <label for="state">Estado</label>
                        <select type="state" class="form-control" name="state" id="state" aria-describedby="stateHelp" required>
                            <option value="<?php echo $line["state"] ?>"></option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="city">Cidade</label>
                        <select id="city" name="city" class="form-control" required>
                            <option value="<?php echo $line["city"] ?>"></option>
		                </select>
                    </div>
                </div>
                <br>
                <button type="Editar" class="btn btn-primary float-right">Editar</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>

    <script>
        $("#login-button").click(function () {
            $("#login-box").modal();
        });
        window.setTimeout(function () {
            $(".alert").fadeTo(500, 0).slideUp(500, function () {
                $(this).remove();
            });
        }, 1500);
        $("#phone")
        .mask("(99) 9999-9999?9")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if(phone.length > 10) {
                element.mask("(99) 99999-999?9");
            } else {
                element.mask("(99) 9999-9999?9");
            }
        });
        $.getJSON('estados_cidades.json', function (data) {
            var items = [];
            var options = '<option value="">Insira o estado: </option>';
            $.each(data, function (key, val) {
                options += '<option value="' + val.nome + '">' + val.nome + '</option>';
            });
            $("#state").html(options);
            $("#state").change(function () {
                var options_cidades = '';
                var str = "";
                $("#state option:selected").each(function () {
                    str += $(this).text();
                });
                $.each(data, function (key, val) {
                    if(val.nome == str) {
                        $.each(val.cidades, function (key_city, val_city) {
                            options_cidades += '<option value="' + val_city + '">' + val_city + '</option>';
                        });
                    }
                });
                $("#city").html(options_cidades);
            }).change();
        });
    </script>
</body>

</html>