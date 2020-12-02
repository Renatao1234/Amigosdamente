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
      <!--posição texto-->
      <div class="collapse navbar-collapse" id="navbarsExample05">
        <h5>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="ansiedade.php">Ansiedade <span class="sr-only">(current)</span></a>
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
    </nav>]
  <!--/navbar-->
  <!--header-->
  <div class="container">
    <!--design header-->
    <div class="jumbotron jumbotron-fluid p-4 p-md-4 text-white rounded" style="background-color: #3EA2B1; margin-top: 150px;">     
      <!--texto header-->
      <div class="col-md-6 px-0">
        <h8 class="display-5">Ansiedade</h8>
      </div>
    </div>
        </div>
  <!--/header-->
  <!--blog post-->
  <main role="main" class="container" style="margin-bottom: 100px;">
    <!--posição do blog-->
    <div class="row">
      <div class="col-md-8">
        <!--formatação texto-->
          <h2 class="blog-post-title">O transtorno</h2>
          <p class="blog-post-meta">10 de agosto, por Vitória Vidica</p>
          <img src="imagens/img10.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href='https://br.freepik.com/vetores/abstrato' style="text-decoration: none;">Abstrato vetor criado por pch.vector - br.freepik.com</a></p>
          </div>
          <p>O transtorno de ansiedade é o sentimento de preocupação excessiva, que não apenas faz com que a pessoa que o sente tenha atenção às situações que já viveu ou irá viver, mas também, o impede de manter suas relações sociais e com o ambiente em que vive com normalidade.</p>
          <p>Vale ressaltar que a ansiedade é uma característica presente em todas as pessoas, é essa a resposta do sistema nervoso autônomo que nos mantém atentos e preocupados com situações futuras ou passadas, entretanto, quando essa preocupação alcança níveis exagerados nosso corpo envia alguns sinais que indicam que algo está saindo do controle.</p>
          <h2>Como identificar</h2>
          <p>Os sintomas psicológicos mais comuns são: Problemas de concentração; Sensação de que algo ruim irá acontecer; Constante tensão e nervosismo; Irritabilidade; Problemas para dormir e, Descontrole sobre o pensamento.</p>
          <!--formatação anúncio-->
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p>Já os sintomas físicos mais comuns são: Dor no peito e aumento dos batimentos cardíacos; Dores no estômago e enjoos; Ânsia de vômito; Diarreia; Tremores pelo corpo; Suor excessivo; Sensação de fraqueza e, Tensão muscular.</p>
          <h2>As causas da ansiedade</h2>
          <h3>Fatores genéticos</h3>
          <img src="imagens/img11.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href='https://br.freepik.com/vetores/mulher' style="text-decoration: none;">Mulher vetor criado por pch.vector - br.freepik.com</a></p>
          </div>
          <p>Um dos fatores que influenciam o desenvolvimento do transtorno de ansiedade é a genética, se os pais de uma pessoa sofrem desse transtorno ela tem cerca de 30% a 40% de chance de apresentar os sintomas e sofrer do mesmo transtorno também.</p>
          <p>O gene responsável por essa influência é o COMT, ele é quem quebra a molécula de dopamina no cérebro. As variações resultantes da ação do COMT são chamadas Val158 e Met158.</p>
          <P>Estudos realizados na Universidade de Bonn, na Alemanha indicam que as pessoas que possuem duas cópias da variação Met158 estão mais dispostas a terem transtornos de ansiedade, pois existe a possibilidade de essa variação estar relacionada com maiores níveis de dopamina na região pré-frontal do córtex cerebral.</P>
          <!--formatação anúncio-->
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p> <a href= "https://www.bbc.com/portuguese/reporterbbc/story/2008/08/080811_ansiedade_genes_mv.shtml." style="text-decoration: none;">Nesse estudo </a> realizado com imagens agradáveis, neutras e desagradáveis foi possível observar que as pessoas que possuíam duas cópias da variação Val158 ou uma cópia de cada uma delas não apresentavam uma reação, um susto muito grande, enquanto as que possuíam as duas cópias da variação Met158 apresentavam atividades cerebrais semelhantes a de pacientes já diagnosticados com transtorno de estresse pós-traumático</p>
          <h3>Traumas</h3>
          <img src="imagens/img12.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href='https://br.freepik.com/vetores/carater'style="text-decoration: none;">Caráter vetor criado por vectorjuice - br.freepik.com</a></p>
          </div>
          <p>É caracterizado como trauma o evento extremamente estressante e que põe em risco a vida de quem o viveu ou testemunhou, esse evento inesperado, que quando acontece coloca a pessoa em situação de impotência, pode vir a gerar diversos tipos de transtornos ansiosos.</p>
          <p>O evento traumático passa a atrapalhar a vida da pessoa que o viveu, fazendo com que mude seu comportamento para que a situação não possa vir a repetir e, as sequelas psicológicas do trauma são caracterizadas principalmente pela soma de emoções, imagens e sons.</p>
          <p>Os eventos traumáticos que ocorrem ainda na primeira infância (até os 6 anos de idade) são responsáveis por muitos transtornos ansiosos diagnosticados apenas na fase adulta, segundo a psicóloga Vanessa Fernandes Fiorensi, pesquisadora da tese de mestrado apresentada na Faculdade de Medicina de Ribeirão Preto da Universidade de São Paulo (FMRP-USP).</p>
          <!--formatação anúncio-->
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p>Os participantes de sua pesquisa com transtorno de ansiedade generalizada relataram eventos traumáticos mais emocionais na infância, como abuso sexual e, também baixa autoestima, com a percepção de que não tinham valor como pessoa. Para aqueles com fobia social não se apresentavam as mesmas características, na verdade, eles demonstraram traços de neuroticismos, instabilidade emocional e intolerância à frustração.</p>
          <p>Entretanto, os transtornos de ansiedade e de estresse pós-traumático, possuem uma característica em comum, o déficit de discriminação ambiental. Segundo Fiorensi (2017) “ter dificuldade de compreender seu meio, seja no social, no familiar, no trabalho, entre outros. Ela compreende menos, ou de forma errônea, as situações a sua volta”.</p>
          <h3>Estresse</h3>
          <img src="imagens/img13.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href='https://br.freepik.com/vetores/pessoas'style="text-decoration: none;">Pessoas vetor criado por stories - br.freepik.com</a></p>
          </div>
          <p>O estresse é uma reação do nosso corpo a algum estímulo externo, provocando a ativação de nosso mecanismo de luta ou de fuga ao estressor. Ele pode ser provocado por situações que não necessitem desse mecanismo, assim podendo se tornar muito comum. A ocorrência de situações estressoras em um período curto de tempo, pode ocasionar a ansiedade (MARGIS et al., 2003).</p>
          <img src="imagens/sobre.png" width="300px">
          <!--formatação footer post-->
          <div class="blog-post-footer">
            <p>Editado pela equipe Amigos da mente</p>
            <p>Última atualização 08/11/2020</p>
            <p>Referências:</p>
              <p>DEUS, Pérsio Ribeiro Gomes (ed.). Ansiedade: o que é, como controlar uma crise e 25 sintomas. [S. l.], [2020?]. Disponível <a href="https://www.minhavida.com.br/saude/temas/ansiedade." style="text-decoration: none;"> aqui. </a></p>
              <p>CAMPOS, Leonor N Medeiros. Você sabe o que é trauma? Saiba quais são os sintomas e o tratamento. [S. l.], 10 jul. 2018. Disponível <a href="https://blog.psicologiaviva.com.br/o-que-e-trauma/."style="text-decoration: none;"> aqui.</a></p>
              <p>MARGIS, Regina et al. Relação entre estressores, estresse e ansiedade. [S. l.], 18 mar. 2003. Disponível <a href="https://www.scielo.br/pdf/rprs/v25s1/a08v25s1."style="text-decoration: none;"> aqui.</a></p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!--/blog post-->
  
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