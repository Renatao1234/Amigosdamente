<?php
    include("conexao.php");
    // A sessão precisa ser iniciada em cada página diferente
    if (!isset($_SESSION)){
        session_start();
    }
    
    $msg = $_POST['MessageFlcn'];
    $nome = $_SESSION['nome'];
    $email = $_SESSION['email']; 
    $msgType = $_POST['msgType'];
    $data = date("Y-m-d H:i:s");
        
    $sql = "INSERT INTO mensagem (mensagem, tipo, email, data_envio) VALUES ('$msg', '$msgType','$email', '$data')";
    $conexao->query($sql) or die;
    header('Location: FaleConosco.php');
?>