<?php
// Iniciar sessão
session_start();

// Verificar se o usuário está logado
$response = array('loggedIn' => isset($_SESSION['user_id']));
echo json_encode($response);
?>
