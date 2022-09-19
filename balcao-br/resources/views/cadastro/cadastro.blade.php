<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('/assets/cadastro/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/cadastro/css/app.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Crie sua conta </title>
</head>

<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-5 rounded-5" style="background-color: #689F38">
                <h1>Balcão Brasil</h1>
                <img src="/assets/cadastro/img/lazy.png" alt="logobalcaobrasil" class="img-fluid">
                <div class="row g-0 text-center">
                </div>
            </div>
            <div class="col-7 rounded-5 border border-2">
                <h2> Crie sua conta</h2>
                <form method="post">
                    <div class="text-fild">
                        <input type="text">
                        <span></span>
                        <label>Nome</label>
                    </div>
                    
                    <input type="email" name="Email" placeholder="Email" class="border-0"><br><br>
                    <input type="password" name="Password" placeholder="Password" class="border-0"><br><br>
                    <input type="password" name="Confirm Password" placeholder="Confirm Password" class="border-0"><br><br>
                    <input type="submit" value="Criar Conta" class="btn btn-success" class="border-0">


                </form>


            </div>
        </div>
    </div>

</body>


</html>