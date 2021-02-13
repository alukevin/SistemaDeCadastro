<?php
session_start();
include('conexao.php');
if(empty($_POST['usuario']) || empty($_POST['senha'])){

    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query = "select * from usuarios where username = '{$usuario}' and password = '{$senha}'";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);
echo $row;
if($row == 1) {

	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['username'];
	header('Location: painel.php');
	exit();
} else {
	$_SESSION['nao_autenticado'] = true;
	header('Location: index.php');
	exit();
}