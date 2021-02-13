<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">


    <link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/style.css">
    <title>Login </title>
</head>



<body>
    <?php include ('footer.php'); ?>
    <div class="container">
    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>

        <div class="box">
            <br>
            <form action="login.php" method="POST">
                <label for="usuario">User: </label><br>
                <input class="InputLogin" type="text" id="usuario" name="usuario" placeholder="Seu user" required ><br>
                <label for="senha">Senha: </label><br>
                <input class="InputLogin" type="password" id="senha" name="senha" required>
          <br>
                <input type="submit" value="Login" class="btnLogin">
                <a href="cadastro.php" class="btnCadastro" >cadastrar</a>
            </form>
        </div>
    </div>
  
</body>

</html>