<?php 
  require_once('sessao_validador.php');
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

    <title>App Help Desk</title>
  </head>
  <body class="bg-success">
   <!--AREA DE NAVEGAÇÃO-->
   <?php require_once 'menu.php' ?>
    <!--FECHAMENTO ÁREA DE NAVEGAÇÃO-->
 
    <div class="row mt-5">
      <div class="col-md-10 m-auto">
        <div class="card">
          <div class="row">
            <div class="col-md-12">
              <div class="card-header bg-light text-dark">
                <span class="h5">ABERTURA DE CHAMADO</span>
              </div>
            </div>
          </div>
          <div class="card-body bg-dark">
            <form action="registra_chamado.php" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sel0" class="h5 text-white">Título</label>
                    <input
                      type="text"
                      class="form-control bg-white"
                      placeholder="Digite aqui o título da mensagem"
                      id="sel0"
                      name="tituloChamado"
                    />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="sel1" class="h5 text-white">Categoria</label>
                    <select
                      class="form-control bg-white"
                      id="sel1"
                      name="categoriaChamado"
                    >
                      <option>Criação Usuário</option>
                      <option>Impressora</option>
                      <option>Hardware</option>
                      <option>Software</option>
                      <option>Rede</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="descricao" class="h5 text-white"
                      >Descrição:</label
                    >
                    <textarea
                      class="form-control bg-white"
                      id="descricao"
                      name="descricaoChamado"
                      rows="7"
                    ></textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <a
                    href="home.php"
                    class="form-control btn-dark text-white"
                  >
                    Voltar
                  </a>
                </div>
                <div class="col-md-6">
                  <button
                    type="submit"
                    href="consulta-chamado.php"
                    class="form-control btn btn-dark text-white"
                  >
                    Abrir
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <?php require_once 'rodape.php' ?>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
