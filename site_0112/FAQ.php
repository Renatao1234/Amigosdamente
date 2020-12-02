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
        <h1 class="title-faq">Perguntas Frequentes</h1>
          <div class="container-faq">
            <div class="faq_container">

              <div class="faq">
                  <div class="faq_question">Posso confiar nessas informações?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Todos os artigos presentes no site são embasados em estudos científicos e revisados antes de serem publicados. A equipe Amigos da Mente também conta com o apoio de profissionais na área de saúde mental para ajudar no desenvolvimentos dos textos.</div>
                  </div>
              </div>
      
              <div class="faq">
                  <div class="faq_question">O site só aborda ansiedade e depressão?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">No momento sim.</div>
                  </div>
              </div>



              <div class="faq">
                  <div class="faq_question">Como realizo cadastro no site?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">No cabeçalho do site se encontra a área “Cadastro”, em que o usuário irá inserir seus dados pessoais e poderá se cadastrar no site Amigos da Mente.</div>
                  </div>
              </div>


              <div class="faq">
                  <div class="faq_question">Onde encontro conteúdo específicos sobre os transtornos mentais?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">No cabeçalho do site, temos as abas “Ansiedade” onde se encontram os textos específicos desse transtorno e, na aba “Depressão” conteúdos respectivos ao transtorno depressivo.</div>
                  </div>
              </div>
              
              <div class="faq">
                  <div class="faq_question">Vocês são psicólogos?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Não, somos um grupo de estudantes da ETEC Parque da Juventude do curso de Informática para Internet. No entanto, mantemos contato com profissionais da área da saúde mental afim de tornar o conhecimento sobre esse assunto mais acessível.</div>
                  </div>
              </div>

              <div class="faq">
                  <div class="faq_question">Fazem recomendações de psicólogos?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Não, apesar de mantemos contato com profissionais da área de saúde mental não realizamos recomendações dos mesmos.</div>
                  </div>
              </div>
              <div class="faq">
                  <div class="faq_question">Realizam consultas com psicólogos online?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Não oferecemos esse tipo de serviço.</div>
                  </div>
              </div>
              <div class="faq">
                  <div class="faq_question">O site só aborda ansiedade e depressão?</div>
                  <div class="faq_answer_container">
                      <div class="faq_answer">Sim, apesar de esses não serem os únicos transtornos mentais reconhecidos pela medicina, nosso site tem foco apenas em ansiedade e depressão.</div>
                  </div>
              </div>    
        </div>
      </form>
    </div>
    </div>
    </div>
  </body> 

</html>