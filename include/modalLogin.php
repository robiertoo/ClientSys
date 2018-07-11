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
            <label for="emailLogin">E-mail</label>
            <input type="emailLogin" name="emailLogin" class="form-control" id="emailLogin" aria-describedby="emailLoginHelp" placeholder="Insira seu e-mail">
          </div>
          <div class="form-group">
            <label for="passwordLogin">Senha</label>
            <input type="password" name="passwordLogin" class="form-control" id="passwordLogin" placeholder="Insira sua senha">
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
