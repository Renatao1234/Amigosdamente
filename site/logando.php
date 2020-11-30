<?php
//Abrindo seção 
session_start();
include('conexao.php');

//Verificando se os campos estão vazios
if(empty($_POST['email']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}

//Atribuindo dados do usuario a variaveis
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//Verificando se o usuario está registrado
$query = "select nome from usuario where email = '$email' and senha = '$senha'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);

//Caso o usuario esteja cadastrado ele é logado
if($row == 1) {
	$usuario_bd = mysqli_fetch_assoc($result);
	$_SESSION['nome'] = $usuario_bd['nome']; 
	$_SESSION['login_autenticado'] = true;
	header('Location: login.php');
	exit();
} 
//Caso o usuario não esteja cadastrado ele não é logado
else {
	$_SESSION['login_nao_autenticado'] = true;
	header('Location: login.php');
	exit();
}

?>


