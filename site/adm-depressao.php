<?php 
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
      <!--posição menu-->
      <div class="collapse navbar-collapse" id="navbarsExample05">
        <h5>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-light" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="adm-ansiedade.php">Ansiedade</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="adm-depressao.php">Depressão <span class="sr-only">(current)</span></a>
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
                <a href="logout.php" class="nav-link text-light">sair</a>
              </li>
            <?php 
              endif;
            ?>

        </ul>
       </h5> 
      </div>
    </nav>
    <!--/navbar-->
    <!--header-->
    <div class="container">
      <!--design header-->
      <div class="jumbotron jumbotron-fluid p-4 p-md-4 text-white rounded" style="background-color: #3EA2B1; margin-top: 150px;">     
        <!--texto header-->     
      <div class="col-md-6 px-0">
        <h8 class="display-5">Depressão</h8>
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
          <h2 class="blog-post-title">O transtorno depressivo</h2>
          <p class="blog-post-meta">8 de novembro, por Vitória Vidica</p>
          <img src="imagens/img7.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href="https://pixabay.com/pt/users/layers-245306/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4799196"style="text-decoration: none;">Layers</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4799196"style="text-decoration: none;">Pixabay</a></p>
          </div>
            <p>O transtorno depressivo é caracterizado pelo aparecimento de uma tristeza permanente e, a pessoa que apresenta esse quadro pode conviver com a tristeza, insônia e baixa autoestima, seus sintomas são físicos e psicológicos.</p>
          <h2>Como identificar</h2>
          <p>A pessoa se sente triste, vazia e sem algum tipo de esperança ou expectativa grande parte do dia, quase todo dia. Ela perde interesse e/ou prazer em seus hobbies ou em estar com a família e os amigos. Também pode ter problemas para dormir, comer e realizar suas tarefas normalmente.</p>
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p>O indivíduo pode ter todos os sintomas, ou apenas alguns, se durar por mais de duas semanas tem uma chance de ser depressão. É essencial que o diagnóstico seja feito por um psicólogo profissional já que apenas 35% dos doentes são diagnosticados e tratados adequadamente (HIRSCHFELD et al., 1997).</p>  
          <h2>Como ocorre</h2>
          <img src="imagens/img3.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href="https://pixabay.com/pt/users/graehawk-4550074/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2666433"style="text-decoration: none;">Grae Dickason</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2666433"style="text-decoration: none;">Pixabay</a></p>
          </div>
          <p>Pesquisas sugerem que a combinação de fatores genéticos (já ter casos na família), biológicos, falta de químicos no cérebro como serotonina e dopamina, ambientais, estar em um ambiente estressante, e psicológicos influenciam na depressão.</p>
          <p>A depressão pode ocorrer junto com outras doenças como diabetes, câncer, doenças cardíacas e doença de Parkinson.</p>
          <p>O transtorno pode fazer essas doenças piorarem e vice e versa. Em alguns casos as medicações para essas doenças que causam a depressão. “O estresse parece ser um dos principais fatores ambientais que predispõem um indivíduo à depressão. Em cerca de 60% dos casos, os episódios depressivos são precedidos pela ocorrência de fatores estressantes”.</p>
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <h2>As causas da depressão</h2>
          <h3>Fatores genéticos</h3>
          <img src="imagens/img5.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href="https://pixabay.com/pt/users/engin_akyurt-3656355/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4688918"style="text-decoration: none;">Engin Akyurt</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=4688918"style="text-decoration: none;">Pixabay</a></a></p>
          </div>
            <p>Em alguns casos o fator genético-hereditário é evidente já em outros, ele não se mostra tão presente. O que parece ser herdado é uma tendência para um funcionamento anormal em algumas regiões cerebrais. Esse funcionamento incomum facilitaria que essas pessoas tivessem depressão.</p>
          <p>A maioria dos casos de depressão parece ser geneticamente transmitida e quimicamente produzida. “Estamos certos de que existem fatores biológicos e psicológicos em todas as doenças humanas. Em algumas, o fator biológico é determinante e os psicológicos, consequência”.</p>
          <h3>Transtornos psiquiátricos correlatos</h3>
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p>Alguns transtornos podem desencadear o desenvolvimento de depressão como ansiedade, bipolaridade, transtorno obsessivo compulsivo e esquizofrenia. Eles influenciam nos nossos pensamentos e em nosso dia-a-dia e, por isso podem piorar caso não tratados de forma correta.</p>
          <p>Transtornos causados por estresse também podem evoluir para depressão. “Estudos prévios sugerem que a depressão possa representar um fator de risco ou uma manifestação precoce da demência de Alzheimer”.</p>
          <h3>Estresse crônico</h3>
          <img src="imagens/img6.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href="https://pixabay.com/pt/users/1388843-1388843/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1492052"style="text-decoration: none;">1388843</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1492052"style="text-decoration: none;">Pixabay</a></p>
          </div>
          <p>Os efeitos físicos do estresse, normalmente, não duram tanto. Porém pessoas com estresse crônico se veem em um estado constante de alerta intensificado. Estresse crônico coloca pressão no corpo por um longo período de tempo e isso causa uma grande quantidade de sintomas físicos, como fadiga, dores de cabeça, irritabilidade, problemas para dormir e mudança de apetite.</p>
          <p>O estresse também pode evoluir tanto para doenças físicas quanto transtornos mentais e pode levar a algum vício. “O estresse por si só não é o suficiente para desencadear uma enfermidade orgânica ou para provocar uma disfunção significativa na vida da pessoa” (ARALDI-FAVASSA, 2005).</p>
          <h3>Disfunções hormonais</h3>
          <p>Disfunções hormonais ocorrem quando os níveis de hormônios estão fora do comum na sua corrente sanguínea, seja para mais baixo ou mais alto que o normal. Por causa de seu papel fundamental no corpo, até uma pequena disfunção hormonal pode causar efeitos colaterais no corpo. Os sintomas dependem em qual órgão e qual hormônio foi afetado.</p>
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p>Qualquer mudança nos hormônios, incluindo menopausa, nascimento de uma criança, problemas na tireoide, entre outros transtornos podem causar depressão. Baixos níveis de hormônios tireoidianos livres, mesmo dentro dos níveis normais, estão associados à demora na resposta terapêutica em depressão bipolar (Cole et al., 2002).</p>
          <h3>Dependência de álcool e drogas ilícitas</h3>
          <p>Dependência de álcool e drogas está altamente relacionada com a depressão, várias pessoas que sofrem de depressão, especialmente aquelas que não foram propriamente diagnosticadas, são seduzidas pelo efeito sedativo do álcool e das drogas, os usando como um tipo de medicação para ajudar a distrair do sentimento persistente de tristeza.</p>
          <img src="imagens/img4.jpg" width="800px">
          <!--formatação legenda-->
          <div class="blog-post-footer">
            <p>Imagem de <a href="https://pixabay.com/photos/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1081788"style="text-decoration: none;">Free-Photos</a> por <a href="https://pixabay.com/pt/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1081788"style="text-decoration: none;">Pixabay</a></p>
          </div>
          <p>Desesperados para se sentirem melhores ou acabarem com a dor, mesmo que por pouco tempo, os indivíduos usam os efeitos prazerosos dessas substâncias com esse propósito. Entretanto, estudos constantemente mostram que álcool aumenta a duração e a intensidade de episódios depressivos.</p>
          <p>“A ingestão de álcool, deve-se muito ao facto de os indivíduos terem a crença de que este alivia estados emocionais negativos, tendo como objetivo ‘fugir’ aos problemas do dia-a-dia ou, simplesmente, desinibição social” (GALVÃO, et al, 2017).</p>
          <h3>Traumas psicológicos</h3>
          <p>Pessoas que estiveram pessoalmente envolvidas ou testemunharam um evento traumático, tem família ou amigos que foram machucados ou mortos, trabalham com o resgate de pessoas ou até mesmo viram nas notícias algum evento traumático, passam por uma resposta emocional.</p>
          <div class="container">
            <div class="jumbotron jumbotron-fluid p-4 p-md-6 text-white rounded" style="background-color: grey; margin-top: 50px; margin-bottom: 50px;">
              <p class="lead card-text" style="text-align: center;">Anúncio</p> 
              </div>
          </div>
          <p>Vários desses sentimentos são comuns no luto e na recuperação de qualquer trauma, mas em alguns casos esses sentimentos ficam por um longo tempo. Eles começam a atrapalhar sua rotina, suas ações, suas relações sociais e podem levar à depressão, ansiedade e estresse pós-traumático.</p>
          <p>Autores como Kirtland (1991), acreditam que depressão maior, transtorno afetivo bipolar e distimias estejam associados a traumas na infância. O abuso sexual está mais relacionado a transtornos dissociativos, o estresse pós-traumático à acidentes, enquanto perdas por morte ou separação estão relacionadas à depressão.</p>
          <img src="imagens/sobre.png" width="300px">
          <!--formatação footer post-->
          <div class="blog-post-footer">
            <p>Editado pela equipe Amigos da mente</p>
            <p>Última atualização 08/11/2020</p>
            <p>Referências:</p>
              <p>JOCA, Sâmia Regiane L; PADOVAN, Cláudia Maria; GUIMARAES, Francisco Silveira. Estresse, depressão e hipocampo. Rev. Bras. Psiquiatr., São Paulo , v. 25, supl. 2, p. 46-51, Dec. 2003 .</p>
              <p>NARDI, Antonio Egidio. Depressão no Ciclo da Vida. Rev. Bras. Psiquiatr., São Paulo , v. 22, n. 3, p. 151-152, Sept. 2000 . </p>
              <p>BICALHO, M.A.C. Estudo dos fatores psicossociais, comorbidades clínicas e polimorfismos funcionais dos genes BDNF, COMT, 5HTT e APOE no binômio depressão-demência no idoso. 2010. Tese de doutorado (Doutorado) - UFMG, [S. l.], 29 de abril de 2010. Disponível <a href= "http://hdl.handle.net/1843/BUOS-97SFPD."style="text-decoration: none;"> aqui </a></p>
              <p>ARALDI-FAVASSA, Celí Teresinha; ARMILIATO, Neide; KALININE, Iouri. Aspectos fisiológicos e psicológicos do estresse. Revista de psicologia da UnC, v. 2, n. 2, p. 84-92, 2005. </p>
              <p>GALVAO, Ana et al . Ansiedade, stress e depressão relacionados com perturbações do sono-vigília e consumo de álcool. Revista Portuguesa de Enfermagem de Saúde Mental, Porto , n. spe5, p. 8-12, ago. 2017 .</p>


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
       <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
         <!--formatação texto-->
         <h6 class="text-uppercase font-weight-bold">Contato</h6>
         <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
         <p>
           <i class="fas fa-envelope mr-3"></i> amigosdamente@gmail.com </p>
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