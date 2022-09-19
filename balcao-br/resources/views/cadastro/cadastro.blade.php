<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Cadastro</title>
  <link rel="stylesheet" href="/assets/cadastro/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <div class="center">
    <h1>Crie sua conta</h1>
    <form id="cadastro" method="post">
      <div class="text-fild">
        <input type="text" required>
        <span></span>
        <label>Full name</label>
      </div>
      <div class="text-fild">
        <input type="mailto" required>
        <span></span>
        <label>Email</label>
      </div>

      <div class="text-fild submit-line">
        <button class="submit-eye">
          <i id="ueEyePass1" class="fa fa-eye ueEyePass1"></i>
        </button>
        <input id="password1" type="password" required>
        <span></span>
        <label>Password</label>
      </div>

      <div class="text-fild submit-line">
        <button class="submit-eye">
          <i id="ueEyePass2" class="fa fa-eye ueEyePass2"></i>
         </button>
        <input id="password2" type="password" required> 
        <span></span>
        <label>Confirm Password</label>
      </div> 
      <div class="container">
        <input type="checkbox" id="horns" name="aceite">
        <label for="horns">I have read and agreed to the Terms of Service and Privacy Policy</label>
      </div>
      <input class="btn" type="submit" value="Criar conta">
      <div class="pass">Already have an account? Log In</div>
  </div>
  </div>
  </form>
  <div class="center-2">
    <h2>Balcão Brasil</h2>
    <img src="/assets/cadastro/img/lazy.png" alt="logo-balcao" height="350" width="350" />
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/assets/cadastro/js/password.js"></script>
</body>

</html>