<?php

session_start();
if(!$_SESSION['login_autenticado']){
	header('Location: index.php');
	exit();
}