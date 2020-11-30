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
          <a class="nav-link text-light" href="adm-ansiedade.php">Ansiedade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="adm-depressao.php">Depressão</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="cadastro.php">Cadastro <span class="sr-only">(current)</span></a>
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
<!--/nabvbar-->
    
    <div class="cont" style="margin-top: 150px;">
     
      <div class="form-sign-in">
        <h1 class="title-cadastro">Cadastro</h1>

        <?php 
          if (isset($_SESSION['cadastro_cocluido'])):
        ?>

        <h2 class="aviso-cadastro-concluido" id="avisoCadastroConcluido">Cadastro cocluido,<a href="login.php"> agora faça login</a></h2>
         
         <?php 
          endif;
          unset($_SESSION['cadastro_cocluido']);        
          if (isset($_SESSION['ja_cadastrado'])):
        ?>

        <h2 class="aviso-cadastro-erro" id="avisoCadastroErro">Email já cadastrado</h2>
        
        <?php 
          endif;
          unset($_SESSION['ja_cadastrado']);
        ?>
        
          <div class="container" style="margin-top: 50px;">
            
      <form action="cadastrar.php" method="POST">

        <div class="form-group">
          <label for="uname" class="label-cadastro">Nome do Usuario *</label>
          <input type="text" maxlength="50" class="form-control" id="uname" placeholder="Insira seu nome" name="nome" required>
        </div>

        <div class="form-group">
          <label for="uname" class="label-cadastro">E-mail *</label>
          <input type="email" maxlength="256" class="form-control" id="uemail" placeholder="Insira seu e-mail" name="email" required>
        </div>

        <div class="form-group">
          <label for="inputPassword5" class="label-cadastro">Senha *</label>
          <input type="password" maxlength="8" id="inputPassword5" placeholder="Insira sua senha" class="form-control" aria-describedby="passwordHelpBlock" name="senha" required>
          <small id="passwordHelpBlock" class="form-text text-muted">
            Sua senha deve ter 8 caracteres.
          </small>
          
        </div>
        <div class="form-group">
        <select name="preferencia" class="custom-select" required>
          <option selected>Deseja receber dicas sobre:</option>
          <option value="ansiedade">Ansiedade</option>
          <option value="depressão">Depressão</option>
          <option value="ambos">Ambos</option>
        </select>
        </div>
        
        <button type="submit" class="btn btn-cadastro">Enviar</button>
      </form>

    </div>
  </body> 

</html>