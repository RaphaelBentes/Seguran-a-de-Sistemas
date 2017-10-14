<div class="container">
  <div class="card card-container">
    <p id="login-name" class="login-name-card"></p>
    <form class="form-login" method="post" action="backend/validar.php">
        <input type="text" id="login-user" name="login-user" class="form-control" placeholder="Usuário" required autofocus>
        <br>
        <input type="password" id="login-senha" name="login-senha" class="form-control" placeholder="Senha" required>
        <br>
        <button class="btn btn-primary btn-block btn-login" type="submit"> Entrar </button>
      </form>
    </div>
  </div>
