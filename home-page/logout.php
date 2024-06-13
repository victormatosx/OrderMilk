<?php
// Iniciar sessão
session_start();

// Destruir todas as variáveis de sessão
$_SESSION = array();

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login
header("Location: http://127.0.0.1:5501/signin/signin.html");
exit();
?>
