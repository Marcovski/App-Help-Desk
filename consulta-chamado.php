<? require_once 'sessao_validador.php' ?>
<?php
function dd($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

$chamados = [];

//abrir arquivo para leitura
$file = '../../app-help-desk/chamados/arquivo.txt';
$arquivos = fopen($file, 'r');

// enquanto houver registros(linhas) a serem recuperadas
while (!feof($arquivos)) { // testa pelo fim do arquivo. Essa função so retorna verdadeiro quando encontra o final do arquivo
    $registros = fgets($arquivos); // retorna o que estiver na linha com base na posição do cursor
    $chamados[] = $registros;
}

fclose($arquivos);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/estilo.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />

    <title>App Help Desk</title>
</head>

<body class="bg-success">
    <!--AREA DE NAVEGAÇÃO-->
    <? require_once 'menu.php' ?>
    <div class="row mt-5">
        <div class="col-md-10 m-auto">
            <div class="card bg-dark">
                <div class="card-header bg-white">
                    Consulta de Chamado
                </div>
                <? foreach($chamados as $item){
                  ?>
                <? $chamado = explode('#',$item); 
                    if($_SESSION['perfil_id'] === 2 ){
                        // só vamos exibir o chamado se ele tiver sido criado pelo usuário
                        if($_SESSION['id'] != $chamado[0]){
                            continue;
                        }
                    }
                     if(count($chamado) < 4 ){
                       continue;
                     }
                  ?>
                <div class="card-body mt-2 bg-white">
                    <div class="card bg-success text-white">
                        <div class="card-header">
                            <span class="h5"><?= $chamado[1] ?></span>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote-footer text-white">
                                <?= $chamado[2] ?>
                            </blockquote>
                            <span> <?= $chamado[3] ?> </span>
                        </div>
                    </div>
                </div>
                <?}?>
                <div class="row">
                    <div class="col-md-6 mt-4">
                        <a href="home.php" class="btn btn-dark form-control mb-2">
                            Voltar
                        </a>
                    </div>
                    <div class="col-md-6 mt-3 text-center">
                        <a href="abrir-chamado.php"><img src="imagens/formulario_consultar_chamado.png" alt=""
                                width="50px" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require_once 'rodape.php' ?>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>