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


echo (implode(",", $_POST));

$sql = "select count(*) as total from produtos where codigo='$codigo'";
$result= mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);


$sql = "Insert Into produtos(codigo, nome, fabricante, lote, compra, quantidade, preco) values ('$codigo','$nome','$fabricante','$lote','$Compra','$Quantidade','$Preco')";
if($conexao->query($sql)===TRUE){
    $_SESSION['status_cadastro'] = true;
    echo'true';

    header('Location: cadastroProduto.php');
}
$conexao->close();
echo'False';
header('Location: painel.php');

exit;
?>