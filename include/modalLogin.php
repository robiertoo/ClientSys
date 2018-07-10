<div class="modal fade" id="login-box" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Entrar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="getLog.php?action=login">
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Insira seu e-mail">
          </div>
          <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Insira sua senha">
          </div>
          <div class="modal-footer">
            <button type="Enviar" class="btn btn-primary float-left">Entrar</button>
            <a class="btn btn-success" href="registerUser.php">
              Cadastre-se!
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
