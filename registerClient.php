<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Cliente - ClientSys</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300, 500" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <?php
        include_once("include/navbar.php");
        include_once("include/modalLogin.php");
        if(!$logged){
            header("location:index.php");
        }
    ?>

    <div id="register">
        <div class="container">
        <h1>Insira os dados do cliente!</h1>
            <form method="post" action="client.php?action=register">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp" placeholder="Insira seu nome">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Insira seu e-mail">
                </div>
                <div class="form-group">
                    <label for="phone">Telefone</label>
                    <input type="phone" class="form-control" name="phone" id="phone" aria-describedby="phoneHelp" placeholder="Insira seu telefone">
                </div>
                <div class="form-group">
                    <label for="city">Cidade</label>
                    <input type="text" class="form-control" name="city" id="city" aria-describedby="cityHelp" placeholder="Insira seu cidade">
                </div>
                <div class="form-group">
                    <label for="state">Estado</label>
                    <input type="state" class="form-control" name="state" id="state" aria-describedby="stateHelp" placeholder="Insira seu estado">
                </div>
                <button type="Cadastrar" class="btn btn-primary float-right">Cadastrar</button>
            </form>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    
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