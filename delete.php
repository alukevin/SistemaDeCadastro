<?php
session_start();
include("conexao.php");
$codigo = mysqli_real_escape_string($conexao, trim( $_GET['codigo']) );

$result = implode(",", $_POST);

$sql = "DELETE FROM produtos WHERE codigo  ='$codigo'";
if($conexao->query($sql)===TRUE){
    $_SESSION['status_cadastro'] = true;
}

$conexao->close();

exit;
?>
<script>
 console.log(<?php echo $result ?>); </script>