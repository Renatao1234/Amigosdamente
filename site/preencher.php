<?php
session_start();
include("conexao.php");


$query = "SELECT id_fale_conosco, questao FROM fale_conosco where tipo = 'elogio'";
// executa a query
$result = mysqli_query($conexao, $query) or die(mysqli_error());
// transforma os result em um array
$row = mysqli_fetch_assoc($result);
// calcula quantos result retornaram
$_SESSION['total_elogio'] = mysqli_num_rows($result);

if($row == 1) {
	$fale_conosco_bd = mysqli_fetch_assoc($result);
	$_SESSION['id_elogio'] = $fale_conosco_bd['id_fale_conosco'];
	$_SESSION['questao_elogio'] = $fale_conosco_bd['questao'];
	header('Location: elogio.php');
	exit();
}


$query = "SELECT id_fale_conosco, questao FROM fale_conosco where tipo = 'problema'";
// executa a query
$result = mysqli_query($conexao, $query) or die(mysqli_error());
// transforma os result em um array
$row = mysqli_fetch_assoc($result);
// calcula quantos result retornaram
$_SESSION['total_problema'] = mysqli_num_rows($result);

if($row == 1) {
	$fale_conosco_bd = mysqli_fetch_assoc($result);
	$_SESSION['id_problema'] = $fale_conosco_bd['id_fale_conosco'];
	$_SESSION['questao_problema'] = $fale_conosco_bd['questao'];
	header('Location: problema.php');
	exit();
}



$query = "SELECT id_fale_conosco, questao FROM fale_conosco where tipo = 'duvida'";
// executa a query
$result = mysqli_query($conexao, $query) or die(mysqli_error());
// transforma os result em um array
$row = mysqli_fetch_assoc($result);
// calcula quantos result retornaram
$_SESSION['total_duvida'] = mysqli_num_rows($result);

if($row == 1) {
	$fale_conosco_bd = mysqli_fetch_assoc($result);
	$_SESSION['id_duvida'] = $fale_conosco_bd['id_fale_conosco'];
	$_SESSION['questao_duvida'] = $fale_conosco_bd['questao'];
	header('Location: duvida.php');
	exit();
}

?>
