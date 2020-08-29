<?php
session_start();

function dd($param)
{
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}



$tituloChamado = str_replace('#', '-', $_POST['tituloChamado']);
$categoriaChamado = str_replace('#', '-', $_POST['categoriaChamado']);
$descricaoChamado = str_replace('#', '-', $_POST['descricaoChamado']);
$diretorio = '../../app-help-desk/chamados';

// PHP_EOL-> armazena o caracter de quebra de linha de acordo como SO
$texto = $_SESSION['id'] . '#' .  $tituloChamado . '#' . $categoriaChamado . '#' . $descricaoChamado . PHP_EOL;

if (!file_exists($diretorio)) {
    mkdir($diretorio);
}
$arquivo = fopen("$diretorio/arquivo.txt", 'a');
fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: consulta-chamado.php');