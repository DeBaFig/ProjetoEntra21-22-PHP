<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cadastro</title>
  <link rel="stylesheet" href="/assets/cadastro/css/style.css">

</head>
<body>
  <div class="center">
    <h1>Crie sua conta</h1>
    <form method="post">
      <div class="text-fild">
        <input type="text" required>
        <span></span>
        <label>Full name</label>
      </div>
      <div class="text-fild">
        <input type="email" required>
        <span></span>
        <label>Email</label>
      </div>
      <div class="text-fild">
        <input type="password" required>
        <span></span>
        <label>Password</label>
      </div>
      <div class="text-fild">
        <input type="password" required>
        <span></span>
        <label>Confirm Password</label>
      </div>
      <div>
      <input type="checkbox" id="horns" name="horns">
      <label for="horns">I have read and agreed to the Terms of Service and Privacy Policy</label>
     </div>
      <!-- <div class="pass"></div> -->
      <input class="btn" type="submit" value="Criar conta">
      <div class="pass">Already have an account? Log In</div>
      </div>
  </div>
  </form>
  <div class="center-2">
    <h2>Balcão Brasil</h2>
    <img src="/assets/cadastro/img/lazy.png" alt="logo-balcao" height="350" width="350" />
      </div>
</body>

</html>