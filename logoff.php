<?php

session_start();

// remover indices do array sessão
// unset();
//unset($_SESSION);

// destruir a variavel de sessão
session_destroy();// os efeitos só ficam disponiveis a partir da proxima requisiçao
header('Location: index.php');

?>