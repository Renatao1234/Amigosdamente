<?php
session_start();
include("conexao.php");


//Verificando se os campos estão vazios
if(empty($_POST['questao'])) {
	header('Location: fale_conosco.php');
	exit();
}

//Atribuindo result do usuario a variaveis

$questao = mysqli_real_escape_string($conexao, trim($_POST['questao']));


//Se o usuario não estiver cadastrado são Inserindos seus result no banco de result
$query = "SELECT resposta FROM fale_conosco WHERE id_fale_conosco = $questao";
$result = mysqli_query($conexao, $query) or die(mysqli_error());
$row = mysqli_num_rows($result);

if($row == 1) {
	$fale_conosco_bd = mysqli_fetch_assoc($result);
	$_SESSION['resposta'] = $fale_conosco_bd['resposta']; 
	header('Location: fale_conosco.php');
	exit();
}

?>
