<?php
session_start();
include("conexao.php");

//Atribuindo dados do usuario a variaveis
$nome 		 = mysqli_real_escape_string($conexao, trim($_POST['nome']));
$email 		 = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha 		 = mysqli_real_escape_string($conexao, trim($_POST['senha']));
$preferencia = mysqli_real_escape_string($conexao, trim($_POST['preferencia']));

//Verificando se o usuario já está registrado
$sql = "select count(*) as total from usuario where email = '$email'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

//Se o usuario já estiver cadastrado o cadastro é barrado
if($row['total'] == 1) {
	$_SESSION['ja_cadastrado'] = true;
	header('Location: cadastro.php');
	exit;
}
//Se o usuario não estiver cadastrado são Inserindos seus dados no banco de dados
$sql = "INSERT INTO usuario (nome, email, senha, data_cadastro, preferencia) VALUES ('$nome', '$email', '$senha', NOW(), '$preferencia')";

if($conexao->query($sql) === true) {
	$_SESSION['cadastro_cocluido'] = true;
}

$conexao->close();
header('Location: cadastro.php');
exit;
?>