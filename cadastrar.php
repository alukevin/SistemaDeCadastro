<?php
session_start();
include("conexao.php");
$user = mysqli_real_escape_string($conexao, trim($_POST['User']) );
$password = mysqli_real_escape_string($conexao, trim( $_POST['Password']) );


echo $number;


$sql = "select count(*) as total from usuarios where username='$user'";
$result= mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] ==1 ){
$_SESSION['usuario_existe']=true;
header('location: cadastro.php');
exit ;
}

$sql = "Insert Into usuarios(username,password) values ('$user', '$password')";
if($conexao->query($sql)===TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();
header('location: cadastro.php');
exit;
?>