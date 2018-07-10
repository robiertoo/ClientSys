<?php if ($msg == "UserSuccess") {?>
  <div class="alert alert-success alert-dismissible" role="alert">
      <h5>Sucesso!</h5>
      <p>Login realizado com sucesso!</p>
  </div>
<?php } elseif ($msg == "UserError") {?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <h5>Erro!</h5>
    <p>Erro ao realizar login!</p>
    <p>Email já consta no banco de dados!</p>
  </div>
<?php } elseif ($msg == "UserLoginError") {?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <h5>Erro!</h5>
    <p>Email ou senha incorretos ou inexistentes!</p>
  </div>
<?php } elseif ($msg == "ClientSuccess") {?>
  <div class="alert alert-success alert-dismissible" role="alert">
    <h5>Sucesso!</h5>
    <p>Sucesso ao cadastrar cliente!</p>
  </div>
<?php } elseif ($msg == "ClientError") {?>
  <div class="alert alert-danger alert-dismissible" role="alert">
    <h5>Erro!</h5>
    <p>Email já consta no banco de dados!</p>
  </div>
<?php } elseif ($msg == "UpdatedClientSuccess") {?>
  <div class="alert alert-success alert-dismissible" role="alert">
    <h5>Sucesso!</h5>
    <p>Sucesso ao atualizar cliente!</p>
  </div>
<?php } elseif ($msg == "ErasedClientSuccess") {?>
  <div class="alert alert-success alert-dismissible" role="alert">
    <h5>Sucesso!</h5>
    <p>Sucesso ao apagar cliente!</p>
  </div>
<?php } elseif ($msg == "Logout") {?>
  <div class="alert alert-success alert-dismissible" role="alert">
    <h5>Sucesso!</h5>
    <p>Sucesso ao realizar logout!</p>
  </div>
<?php }?>
