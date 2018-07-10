<div class="modal fade" id="message" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <?php if($msg == "UserSuccess"){ ?>
          <h5 class="modal-title" id="exampleModalLongTitle">Sucesso!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Login realizado com sucesso!</p>
            <div class="modal-footer">
              <a class="btn btn-primary float-left" href="showClientList.php">
                Lista de Clientes
              </a>
            </div>
        </div>
        <?php } elseif($msg == "UserError") { ?>
            <h5 class="modal-title" id="exampleModalLongTitle">Erro!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Erro ao realizar login!</p>
            <p>Email já consta no banco de dados!</p>
            <div class="modal-footer">
                <a class="btn btn-success" href="registerUser.php">
                    Cadastre-se!
                </a>
            </div>
        </div>
        <?php } elseif($msg == "UserLoginError") { ?>
            <h5 class="modal-title" id="exampleModalLongTitle">Erro!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Erro ao realizar login!</p>
            <p>Email ou senha incorretos ou inexistentes!</p>
            <div class="modal-footer">
                <a class="btn btn-success" href="registerUser.php">
                    Cadastre-se!
                </a>
            </div>
        </div>
        <?php } elseif($msg == "ClientSuccess") { ?>
            <h5 class="modal-title" id="exampleModalLongTitle">Sucesso!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Sucesso ao cadastrar cliente!</p>
        </div>
        <?php } elseif($msg == "ClientError") { ?>
            <h5 class="modal-title" id="exampleModalLongTitle">Erro!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Erro ao cadastrar usuário!</p>
            <p>Email já consta no banco de dados!</p>
        </div>
        <?php } elseif($msg == "UpdatedClientSuccess") { ?>
            <h5 class="modal-title" id="exampleModalLongTitle">Sucesso!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Sucesso ao atualizar cliente!</p>
        </div>
        <?php } elseif($msg == "ErasedClientSuccess") { ?>
            <h5 class="modal-title" id="exampleModalLongTitle">Sucesso!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <p>Sucesso ao apagar cliente!</p>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>