<?php 
  require_once('sessao_validador.php');//require -> fatal error caso esteja errado
  ?>
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

    <title>APP HELP DESK</title>
  </head>
  <body class="bg-success">
    <!--AREA DE NAVEGAÇÃO-->
    <?php require_once 'menu.php' ?>
    <!--FECHAMENTO ÁREA DE NAVEGAÇÃO-->

    <!--ROW[0]-->
    <div class="row mt-5 home">
      <div class="col-md-10 m-auto">
        <!--INICIO DO MENU-->
        <div class="card bg-light">
          <!--ROW[1]-->
          <div class="row">
            <!--HEADER MENU-->
            <!--COLUNA QUE AGRUPA TODO O MENU-->
            <div class="col-md-12">
              <div class="card-header bg-dark text-white">
                MENU
              </div>
              <!--FIM HEADER-->
              <!--INICIO DO CORPO DO MENU-->
              <div class="card-body bg-dark mt-1">
                <!--ROW[2]-->
                <div class="row">
                  <!--ABRIR CHAMADO-->
                  <div class="col-md-6 text-center">
                    <a href="abrir-chamado.php"><img
                      src="imagens/formulario_abrir_chamado.png"
                      alt=""
                      width="100px"
                    /></a>
                    <br />
                    <br />
                    <span class="text-white">ABRIR CHAMADO</span>
                  </div>
                  <!--FIM DO ABRIR CHAMADO-->
                  <!--CONSULTAR CHAMADO-->
                  <div class="col-md-6 text-center">
                    <a href="consulta-chamado.php"><img
                      src="imagens/formulario_consultar_chamado.png"
                      alt=""
                      width="100px"
                    /></a>
                    <br />
                    <br />
                    <span class="text-white">CONSULTAR CHAMADO</span>
                  </div>
                  <!-- FIM DO CONSULTAR CHAMADO-->
                </div>
                <!--ROW[2]-->
              </div>
              <!--FIM DO CORPO DO MENU-->
            </div>
            <!--FIM DA COLUNA QUE AGRUPA TODO MENU-->
          </div>
          <!--FIM DA ROW[1]-->
        </div>
        <!--FIM DO MENU-->
      </div>
    </div>
    <!--FIM DA ROW[0]-->

    <?php require_once 'rodape.php' ?>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
