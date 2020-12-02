<?php
class Newsletter {
  private $pdo = null;
  private $stmt = null;
  private $headers = "";
  private $subject = "";
  // CONSTRUCTOR - Conecta ao banco de dados
  function __construct(){
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ] 
      );
    } catch (Exception $ex) { die($ex->getMessage()); }
  }
  // DESTRUCTOR - Desconecta ao banco de dados
  function __destruct(){
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }
  //  Conta Numero de usuarios
  function count(){
    $sql = "SELECT COUNT(*) `cnt` FROM `usuario`";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute();
    $result = $this->stmt->fetchAll();
    return $result[0]['cnt'];
  }
  // GET Usuarios
  function get($start=0, $end=10){
    $sql = "SELECT * FROM `usuario` LIMIT $start,$end";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute();
    return $this->stmt->fetchAll();
  }
  // Cabeçalho e Assunto
  function prime($headers="", $subject=""){
    $this->headers = $headers;
    $this->subject = $subject;
  }
  // Manda Emails
  function send($to, $message){
    return mail($to, $this->subject, $message, 'From: amigosdamente.noreply@gmail.com');
  }
}