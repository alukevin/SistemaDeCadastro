<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/style.css">

    <title>Cadastro</title>
</head>


<body>
    <div class="container">
        <div class="box">
            <br>
            <form action="cadastrar.php" method="POST">
                <?php
                 if(isset($_SESSION['status_cadastro'])):
                 
                ?>
                <div class="notification" id="notification" >
                    <p> Cadastro efetuado!</p>
                </div>
                <?php
               endif;  
               unset($_SESSION['status_cadastro']);                 
            ?>
                <?php
            if(isset($_SESSION['usuario_existe'])):
            
                 ?>
                <div class="notification" id="notification" >
                    <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>

                </div>
            
                <?php
                endif;  
                unset($_SESSION['usuario_existe']);                 
                ?>
                 <?php
                if(isset($_SESSION['usuario_NaoExiste'])):
                
                     ?>
                    <div class="notification" id="notification" >
                        <p>O usuário escolhido não existe. Informe outro e tente novamente.</p>
    
                    </div>
                    <?php
                    endif;  
                    unset($_SESSION['usuario_NaoExiste']);                 
                    ?>
                <div class="Esq" id="Esq" style="text-align: center;">
                    <br>
                    <label for="User">User: </label><br>
                    <input class="InputLogin" type="text" id="User" name="User" required><br>

                    <label for="Password">Password: </label><br>
                    <input class="InputLogin" type="Password" id="Password" name="Password" required><br>

                

                    <input type="submit" value="Cadastrar" class="btnLogin">
                    <a href="index.php" class="btnCadastro">Voltar</a>
                 
                </div>
            </form>
      

            <br><br>




        </div>
    </div>
   
</body>
</html>