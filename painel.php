<?php
session_start();
include('verificaLogin.php');
include('conexao.php');
$sql = "Select * from produtos";
$con= mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <script src="js/painel.js"></script>
    <link rel="stylesheet" href="css/style.css">    
    <script src='js/extensao.js'></script>  
    <title>Produtos - Gustavo</title>
</head>


<body>
  <?php include('template.php'); ?>

    <div class="container">

        <div class="boxPainel">
            <h1>Produtos cadastrados</h1>


            <table id="users">
                <thead>
                    <tr>
                        <td>Codigo</td>
                        <td>Nome</td>
                        <td>Fabricante</td>
                        <td>Número do lote</td>
                        <td>Data Compra</td>
                        <td>Quantidade</td>
                        <td>Preço/unidade</td>
                        <td>Opção</td>

                    </tr>
                </thead>
                <tbody>
                    <?php while($veg= mysqli_fetch_row($con)){ ?>
                    <tr>
                        <td><?php echo $veg[0]  ?></td>
                        <td><?php echo $veg[1]  ?></td>
                        <td><?php echo $veg[2]  ?></td>
                        <td><?php echo $veg[3]  ?></td>
                        <td><?php echo $veg[4]  ?></td>
                        <td><?php echo $veg[5]  ?></td>
                        <td><?php echo $veg[6]  ?></td>
                        <td>
                            <select name="opcao " id="opcao('<?php echo $veg[0]  ?>')"
                                onchange="chama(<?php echo $veg[0]  ?>)">
                                <option value="">&nbsp;</option>
                                <option value="delete">Apagar</option>
                                <option value="editar">Editar</option>
                             

                            </select> </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>


