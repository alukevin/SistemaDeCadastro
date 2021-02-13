<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <title>Cadastro - Gustavo</title>
    
<link rel="stylesheet" href="css/style.css">
</head>



<body>
<?php include('template.php'); ?>
    <div class="container">
        <div class="box">
            <br>
           
          
                <form action="cadastrarProduto.php" method="POST">
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
               if(isset($_SESSION['usuario_NaoExiste'])):
               
                    ?>
                   <div class="notification" id="notification" >
                       <p>O usuário escolhido não existe. Informe outro e tente novamente.</p>
   
                   </div>
                   <?php
                   endif;  
                   unset($_SESSION['usuario_NaoExiste']);                 
                   ?>
                    <br>
                    <label for="Codigo">Codigo: </label><br>
                    <input class="InputLogin" type="text" id="Codigo" name="Codigo" required ><br>

                    <label for="Nome">Nome: </label><br>
                    <input class="InputLogin" type="text"  id="Nome" name="Nome" required ><br>

                    <label for="fabricante">fabricante: </label><br>
                    <input class="InputLogin" type="text" id="fabricante" name="fabricante" required ><br>

                    <label for="lote">lote: </label><br>
                    <input class="InputLogin" type="text" id="lote" name="lote" required><br>

                    <label for="Compra">Compra: </label><br>
                    <input class="InputLogin" type="date" id="Compra" name="Compra" required ><br>
                    
                    <label for="Quantidade">Quantidade: </label><br>
                    <input class="InputLogin" type="text" id="Quantidade" name="Quantidade" required ><br>
                   
                    <label for="Preco">Preco: </label><br>
                    <input class="InputLogin" type="text" id="Preco" name="Preco" required ><br>

                    <input type="submit" value="Cadastrar" class="btnLogin">
                    <a href="painel.php" class="btnCadastro">Voltar</a>
                </form>
            </div>


        
    </div>
   
</body>


</html>