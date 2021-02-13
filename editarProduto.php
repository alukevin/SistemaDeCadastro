<?php
session_start();
include("conexao.php");
$codigo=$_GET['codigo'];
$sql = "Select  * from produtos where codigo='$codigo'";
$con= mysqli_query($conexao, $sql);
$veg= mysqli_fetch_row($con);
?>


<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">

    <title>Edição</title>
    
<link rel="stylesheet" href="css/style.css">
</head>



<body>
<?php include("template.php"); ?>
    <div class="container">
        <div class="box">
            <br>
            <form action="AtualizarProduto.php" method="POST">
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
                
            
                <div class="Esq" id="Esq" style="text-align: center;">
                    <br>
                    <label for="Codigo">Codigo: </label><br>
                    <input class="InputLogin" type="text" id="Codigo" name="Codigo" required value="<?php echo  $veg[0] ?>"><br>

                    <label for="Nome">Nome: </label><br>
                    <input class="InputLogin" type="text"  id="Nome" name="Nome" required value="<?php echo  $veg[1] ?>"><br>

                    <label for="fabricante">fabricante: </label><br>
                    <input class="InputLogin" type="text" id="fabricante" name="fabricante" required value="<?php echo $veg[2]  ?>"><br>

                    <label for="lote">lote: </label><br>
                    <input class="InputLogin" type="text" id="lote" name="lote" required value="<?php echo  $veg[3] ?>"><br>

                    <label for="Compra">Compra: </label><br>
                    <input class="InputLogin" type="date" id="Compra" name="Compra" required value="<?php echo  $veg[4] ?>"><br>
                    
                    <label for="Quantidade">Quantidade: </label><br>
                    <input class="InputLogin" type="text" id="Quantidade" name="Quantidade" required value="<?php echo  $veg[5] ?>"><br>
                   
                    <label for="Preco">Preco: </label><br>
                    <input class="InputLogin" type="text" id="Preco" name="Preco" required value="<?php echo  $veg[6] ?>"><br>

                    <input type="submit" value="Atualizar" class="btnLogin">
                    <a href="index.php" class="btnCadastro">Voltar</a>
                   
                </div>
            </form>
          
            


        </div>
    </div>
  
</body>

</html>