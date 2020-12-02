<?php
//Iniciando sessão
session_start();
//Encerrando sessão
session_destroy();
//Retornando a página inicial
header('Location: index.php');
exit();
?>