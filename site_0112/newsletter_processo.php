<?php
include('conexao.php');

// INIT + Configurações
set_time_limit(0); //0 = Sem tempo limite
$each = 5; // Get 5 Usuarios por rodada
$pause = 1; // 1 sec de pausa entre os emails

// Carrega a Library e o template
require "newsletter.php";
$news = new Newsletter();
$template = file_get_contents("template_email.php");

// Assunto e Cabeçalho
$subject = "Ansiedade e Depressão";
$headers = implode("\r\n", [
  "From: amigosdamente.noreply@gmail.com",
  "Reply-To: abc@xyz.com",
  "MIME-Version: 1.0",
  "Content-Type: text/html; charset=utf-8"
]);
$news->prime($headers, $subject);
unset($subject); unset($headers);

// Manda emails aos poucos
$all = $news->count();
for ($i=0; $i<$all; $i+=$each) {
  $subscribers = $news->get($i,$each);
  foreach ($subscribers as $sub) {
   $msg = str_replace("[NAME]", $sub['nome'], $template);
    $news->send($sub['email'], $msg);

  }
  sleep($pause);
}