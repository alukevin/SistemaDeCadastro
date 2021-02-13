<?php
session_start();
include("conexao.php");
$codigo= mysqli_real_escape_string($conexao, trim( $_POST['Codigo'] ));
$nome = mysqli_real_escape_string($conexao, trim($_POST['Nome']) );
$fabricante = mysqli_real_escape_string($conexao, trim( $_POST['fabricante']) );
$lote = mysqli_real_escape_string($conexao, trim( $_POST['lote']) );
$Compra = mysqli_real_escape_string($conexao, trim( $_POST['Compra']) );
$Quantidade = mysqli_real_escape_string($conexao, trim( $_POST['Quantidade'] ));
$Preco = mysqli_real_escape_string($conexao, trim( $_POST['Preco'] ));




$sql = "select count(*) as total from produtos where codigo='$codigo'";
$result= mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);



$sql = "UPDATE produtos SET nome='$nome',codigo='$codigo',fabricante='$fabricante',lote='$lote',compra='$Compra' ,quantidade='$Quantidade', preco='$Preco' WHERE codigo='$codigo'";
if($conexao->query($sql)===TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('location: painel.php');
echo $sql;

exit;
?>