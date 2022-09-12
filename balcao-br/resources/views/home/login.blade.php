<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Login</title>
  <link rel="stylesheet" href="/public/assets/login/css/app.css">

</head>

<body>
  <div class="center">
    <h1>Entrar</h1>
    <form method="post">
      <div class="text-fild">
        <input type="text" required>
        <span></span>
        <label>Usuario</label>
      </div>
      <div class="text-fild">
        <input type="password" required>
        <span></span>
        <label>Senha</label>
      </div>
      <div class="pass">Esqueceu a senha? Recuperar senha!</div>
      <input class="btn" type="submit" value="Entrar">
      <div class="signup_link">
        Não tem uma conta? <a href="#">Cadastre-se!</a>
      </div>
  </div>
  </div>
  </form>
  <div class="center-2">
    <h2>Balcão Brasil</h2>
    <img src="img/lazy 1.png" alt="imagem de uma pessoa com a perna em cima de uma meza" />

  </div>
</body>

</html>