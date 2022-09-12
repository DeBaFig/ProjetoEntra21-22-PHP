<?php
session_start ();
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>CRUD - Cadastro </title>
    </head> 
    <body>
        <h1> Cadastro </h1>
        <?php
        if(isset($_SESSION['msg']))
            echo $_SESSION['msg'];
            unset ($_SESSION['msg']);
        ?>
        <form method="POST" action="processa.php">
            <label>Nome Completo: </label>
            <input type="text" name="Nome Completo" placeholder="Digite seu nome completo"><br><br>

            <label>Email: </label>
            <input type="email" name="Email" placeholder="Digite o seu melhor email"><br><br> 

            <label>Senha: </label>
            <input type="text" name="Senha" placeholder="Escolha uma senha"><br><br>
            
            <input type="submit" value="Criar Conta"> 
        </form> 
    </body>
</html>