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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/blog.css">
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
            <a class="nav-link text-light" href="index.php">Home <span class="sr-only">(current)</span></a>
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
  <!--/nabvbar-->
  <!--menu-->
  <!--forma da primeira matéria-->
  <div class="container">
    <div class="jumbotron jumbotron-fluid p-4 p-md-4 text-white rounded" style="background-color: #3EA2B1; margin-top: 170px;">      
      <!--texto primeira matéria-->
      <div class="col-md-6 px-0">
        <h1 class="display-4">Suporte familiar</h1>
        <p class="lead my-3">Até onde o suporte da família, ou a falta dele, pode influenciar na sua saúde mental?</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold" style="text-decoration: none;">Continue lendo...</a></p>
      </div>
    </div>
  <!--destaques-->
  <!--posição destaques-->
    <div class="row mb-2">
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <!--posição texto-->
          <div class="col p-4 d-flex flex-column position-static">
            <!--design do texto-->
            <strong class="d-inline-block mb-2 text-primary">Destaque</strong>
            <h3 class="mb-0">Ansiedade</h3>
            <div class="mb-1 text-muted">Nov 8</div>
            <p class="card-text mb-auto">O transtorno de ansiedade é o sentimento de preocupação excessiva, impedindo a pessoa que o sente de manter suas relações sociais e com o ambiente em que vive com naturalidade.</p>
            <a href="adm-ansiedade.html" class="stretched-link" style="text-decoration: none;">Você sabe identificá-lo?</a>
          </div>
          <!--posição imagem-->
          <div class="col-auto d-none d-lg-block">
            <img src="imagens/img10.1.jpg" width="200" height="250">
          </div>
        </div>
      </div>
      <!--posição destaques-->
      <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <!--posição texto-->
          <div class="col p-4 d-flex flex-column position-static">
            <!--design do texto-->
            <strong class="d-inline-block mb-2 text-primary">Destaque</strong>
            <h3 class="mb-0">Depressão</h3>
            <div class="mb-1 text-muted">Nov 8</div>
            <p class="mb-auto">A dependência de álcool e de drogas ílicitas podem provocar diversos tipos de doenças e transtornos psicológicos.</p>
            <a href="adm-depressao.html" class="stretched-link" style="text-decoration: none;">Você sabe qual é a relação dessa dependência em um diagnóstico de depressão?</a>
          </div>
          <!--posição imagem-->
          <div class="col-auto d-none d-lg-block">
            <img src="imagens/img7.1.jpg" width="200" height="250">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/destaques-->
  <!--blog post-->
  <main role="main" class="container" style="margin-bottom: 100px;">
    <!--posição do blog-->
    <div class="row">
      <div class="col-md-8">
        <!--formatação texto-->
          <h2 class="blog-post-title">Suporte familiar</h2>
          <p class="blog-post-meta">28 junho, por Vitória Vidica</p>
  
          <p>Por ser o primeiro círculo social na vida de uma pessoa, a família é fundamental em seu desenvolvimento, acarretando situações boas e ruins a seus membros que perdurarão por toda suas vidas.</p>
          <p>O suporte familiar influencia a saúde mental de uma criança ou adolescente ao ponto de ela não desenvolver nenhum tipo de transtorno mental ou desenvolvê-lo. Pais que são superprotetores e não estimulam a autonomia de seus filhos estão mais propensos a formar cidadãos que sofrerão de algum transtorno mental no futuro e, provavelmente, não irão procurar tratamento adequado rapidamente por não terem esse apoio em casa.</p>
          <!--formatação anúncio-->
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p>Junto ao tratamento psicoterápico, o suporte familiar neste momento exerce um auxílio essencial ao acompanhamento médico, visto que, a maneira como os pais tratam os filhos influencia a imagem que eles terão de si mesmo, se eles influenciarem os filhos a se desassociarem de pensamentos automáticos negativos, a ação da psicoterapia e psicofarmacologia será muito eficiente.</p>
          <!--footer post-->
          <div class="blog-post-footer">
            <p>Editado pela equipe Amigos da mente</p>
            <p>Última atualização 08/11/2020</p>
            <p>Referências: SOUZA, M. S. D; BAPTISTA, Makilim Nunes. Associações entre suporte familiar e saúde mental. Psicologia Argumento, jul./set., 2008. Disponível <a href="https://periodicos.pucpr.br/index.php/psicologiaargumento/article/viewFile/19753/19065." style="text-decoration: none;"> aqui. </a></p>
        </div>
      </div>
    </div>
  </main>
<!--/blog post-->
<!--/menu-->
  
<!--footer-->
<!--formatação footer-->
<footer class="page-footer font-small unique-color-dark" style="background-color: #9BD3DC;">
    <!--divisória footer-->
     <div style="background-color: #47AFBE;">
       <div class="container">
         <div class="row py-4 d-flex align-items-center">
         </div>
       </div>
     </div>
     <!--posição texto-->
     <div class="container text-center text-md-left mt-5">
       <div class="row mt-3">
         <!--formatação texto-->
         <!--posição texto-->
         <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
   
           <!--formatação texto-->
           <h6 class="text-uppercase font-weight-bold">Alguma dúvida?</h6>
           <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
           <p>
             <a href="FAQ.php">Dúvidas frequentes</a>
           </p>
           <p>
             <a href="RF.php">Reclamações frequentes</a>
           </p>
           <p>
             <a href="EF.php">Elogios frequentes</a>
           </p>
           <p>
             <a href="FaleConosco.php">Fale conosco</a>
           </p>
         </div>
         <!--posição texto-->
         <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
           
           <!--formatação texto-->
           <h6 class="text-uppercase font-weight-bold">Contato</h6>
           <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
           <p>
             <p> amigosdamente@gmail.com </p>
           </p>
         </div>
       </div>
     </div>
     <!--formatação-->
     <div class="footer-copyright text-center py-3">© 2020 Copyright: Amigos da mente
     </div>
   </footer>
<!--/footer-->
  </body> 

</html>