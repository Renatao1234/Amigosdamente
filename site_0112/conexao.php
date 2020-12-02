<?php

//Definindo o banco de dados
define('HOST', '127.0.0.1');
define('USUARIO', 'root');
define('SENHA', '');
define('DB', 'amigodamente');

//Atribuindo os valores do banco de dados a uma variavel
$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');