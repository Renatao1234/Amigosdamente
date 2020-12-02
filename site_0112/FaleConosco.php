<!DOCTYPE html>
<html>
<?php

// A sessão precisa ser iniciada em cada página diferente
if (!isset($_SESSION)){
    session_start();
}
?>
<head>
  <meta charset="UTF-8"/>
  <title>Amigos da mente</title>
  <link rel="shortcut icon" href="AmigosDaMenteCorBranco.svg" type="image">
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <link rel="stylesheet" type="text/css" href="css/blog.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script type="text/javascript" src="js/bootstrap.js">
  </script>
  <script type="text/javascript" src="js/jquery.js">
  </script>
</head>
  <body>
   <!--navbar-->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:rgb(51, 132, 144)">
    <h1><img src="imagens/AmigosDaMenteComTipografiaBranca.svg" alt="Responsive image" style="width: 100px"></h1>
    <!--botão responsivo-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
<!--posição do menu-->
    <div class="collapse navbar-collapse" id="navbarsExample05">
      <h5>
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="ansiedade.php">Ansiedade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="depressao.php">Depressão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="cadastro.php">Cadastro</a>
        </li>
            <?php
              if (isset($_SESSION['login_autenticado'])):
            ?>
              <li class="nav-item">
                <p class="nav-link text-light">Olá <?php echo $_SESSION['nome'];?></p>
              </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link text-light">Sair</a>
              </li>
            <?php 
              endif;
            ?>
      </ul>
     </h5> 
    </div>
  </nav>
    <div class="cont-flcn">
      <div class="form-sign-in">
      <div class="form-sign-in-flcn" style="margin-top: 150px">
        <h1 class="title-flcn">Fale Conosco</h1>
          <div class="container-flcn">
      <form action="faleconosco_processo.php" method = "POST">
        <h3>Tipo de Mensagem:</h3>
        <div class="form-group">  
          <input type="radio" value= "elogio" name ="msgType" class="form-check-input" id="msgType" placeholder="">
          <label for="msgType" class="form-check-label">Elogio</label>
        </div>
        <div class = "form-group">
        <input type="radio" value= "pergunta" name ="msgType" class="form-check-input" id="msgType" placeholder="">
          <label for="msgType" class="form-check-label">Pergunta</label>
        </div>
        <div class = "form-group">
        <input type="radio" value= "reclamacao" name ="msgType" class="form-check-input" id="msgType" placeholder="">
          <label for="msgType" class="form-check-label">Reclamação</label>
        </div>
        <div class="form-group">
          <label for="message" class="label-cadastro">Mensagem</label>
          <textarea class="form-control" name="MessageFlcn" rows="13"></textarea>

        </div>
        <div class="btn-container">
          <button type="submit" class="btn btn-flcn">Enviar</button>
        </div>
      </form>
    </div>
   </div>
    </div>
    </div>
  </body> 

</html>