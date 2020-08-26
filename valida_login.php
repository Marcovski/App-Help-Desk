<?php
/* SESSION -> faz com que uma determinada instancia do browser, apartir de um 
identificador único, tenha condições de acessar uma determinada sessão do lado do serv
(um espaço de memória).Cria-se assim uma ponte entre front e back
*/

session_start();// sempre usar no incio do codigo ( cada sessao, por defaut, dura 3 horas)

//$_SESSION['x'] = 'Oi, eu sou um valor de sessão.'; // essa superglobal fica disponivel para toda a instancia do browser

function dd($param){
    echo '<pre>';
    print_r($param);
    echo '</pre>';
}

// usuários do sistema
$usuario_autenticado = false;
$usuarios_app = [
    ['email' =>'adm@teste.com', 'senha' => '123123'],
    ['email' =>'user@teste.com', 'senha' => '123456']
];

foreach($usuarios_app as $user){
    if($user['email'] === $_POST['email'] && $user['senha'] === $_POST['senha']){
        $usuario_autenticado = true;
    }
}

if($usuario_autenticado){
    header('Location: home.php');// força um redirecionamento
    $_SESSION['autenticado'] = 'SIM';
}else{
    header('Location: index.php?login=erro');// redireciona com um param 'erro'
    $_SESSION['autenticado'] = 'NAO';

}
/*
    print_r($_GET);// $_GET é um array
    $_GET['email'];// recupera os dados via url
    $_GET['senha'];


dd($_POST);// também é um array
dd($_POST['email']);
dd($_POST['senha']);
*/

?>