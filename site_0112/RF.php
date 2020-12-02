<?php 
//Iniciando sessão
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Amigos da mente</title>
  <link rel="shortcut icon" href="AmigosDaMenteCorBranco.svg" type="image">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/faqscript.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/navbar.css">
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
<div class="cont-faq">
      <div class="form-sign-in-faq" style="margin-top: 150px">
        <h1 class="title-faq">Reclamações Frequentes</h1>
          <div class="container-faq">
            <div class="faq_container">

              <div class="faq">
                  <div class="faq_question open">Meu site está lento</div>
                  <div class="faq_answer_container" style="display: block;">
                      <div class="faq_answer">Por favor verifique a velocidade da sua internet. Se esse não for caso, o grande número de informações podem atrasar o carregamento de certas informações em nosso site.
                      </div>
                  </div>
              </div>
      



              <div class="faq">
                  <div class="faq_question">Como realizo cadastro no site?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">No cabeçalho do site se encontra a área “Cadastro”, em que o usuário irá inserir seus dados pessoais e poderá se cadastrar no site Amigos da Mente.</div>
                  </div>
              </div>
              
              <div class="faq">
                  <div class="faq_question">Não consigo realizar o cadastro.</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Verifique se os dados inseridos estão corretos e se o seu e-mail foi confirmado.</div>
                  </div>
              </div>
              <div class="faq">
                  <div class="faq_question">Não consigo realizar o login.</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Verifique se os dados inseridos na área de login coincidem com os dados inseridos na área de cadastro.</div>
                  </div>
              </div>
              <div class="faq">
                  <div class="faq_question">Não encontro nas dúvidas frequentes a minha dúvida.</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Envie um e-mail para a equipe Amigos da Mente em amigosdamente@gmail.com.</div>
                  </div>
              </div>
              <div class="faq">
                  <div class="faq_question">O design do site não está agradável.</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Estamos trabalhando para deixar o site mais agradável para os nossos usuários.</div>
                  </div>
              </div>
              <div class="faq">
                  <div class="faq_question">O contato com a equipe Amigos da Mente não foi satisfatório.</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Estamos trabalhando para que isso não ocorra mais e o contato com a equipe seja cada vez mais satisfatório para os nossos usuários.</div>
                  </div>
              </div>
              <div class="faq">
                  <div class="faq_question">As dicas sobre os transtornos mentais não são objetivas e informativas.</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Estamos trabalhando para deixar o site mais agradável para os nossos usuários.</div>
                  </div>
              </div>

             
        </div>
      </form>
    </div>
    </div>
  </body> 

</html>