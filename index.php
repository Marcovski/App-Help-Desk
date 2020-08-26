<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <title> App Help Desk </title>
  </head>
  <body class="bg-success">
   <!--AREA DE NAVEGAÇÃO-->
  <nav class="navbar navbar-expand-lg bg-dark text-white">
      <a href="index.html" class="navbar-brand">
        <img src="imagens/logo.png" alt="" class="img-fluid" width="50px" />
        <span class="text-white">App Help Desk</span></a>
    </nav> 
    <!--FECHAMENTO ÁREA DE NAVEGAÇÃO-->

    <!--AREA DE LOGIN-->
    <div class="areaLogin">
      <!--INICIO DO CARD-->
      <div class="card">
        <div class="card-header">
          <span class="text-white ml-5">AREA DE LOGIN</span>
        </div>
        <!--INICIO CARD-BODY-->
        <div class="card-body">
          <form action="valida_login.php" method="POST">
            <input
              type="email"
              id="email"
              name="email"
              placeholder="Digite aqui seu email"
              class="form-control bg-white"
            />
            <input
              type="password"
              id="senha"
              name="senha"
              placeholder="Digite aqui sua senha"
              class="form-control bg-white mt-3"
            />
            <?php
             if(isset($_GET['login']) && $_GET['login'] === 'erro'){ //isset-> verifica se existe ou não
            ?>
            <div>
              <p class="text-danger">Email ou senha incorretos.</p>
            </div>
              <?php } ?>
              <?php
             if(isset($_GET['login']) && $_GET['login'] === 'erro2'){ //isset-> verifica se existe ou não
            ?>
            <div>
              <p class="text-danger">Realize o login para acessar as páginas do site.</p>
            </div>
              <?php } ?>
            <button
              type="submit"
              class="btn btn-dark form-control text-white mt-3"
            >
              Logar
            </button>
          </form>
        </div>
        <!--FIM DO CARD-BODY-->
      </div>
      <!--FIM DO CARD-->
    </div>
    <!--FIM DA AREA DE LOGIN-->
    <?php require_once 'rodape.php' ?>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
