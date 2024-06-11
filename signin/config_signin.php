<?php
// Iniciar sessão
session_start();

// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ordermik";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prevenção contra SQL Injection
    $email = $conn->real_escape_string($email);
    $password = $conn->real_escape_string($password);

    // Consulta ao banco de dados
    $sql = "SELECT id FROM cadastro_user WHERE email = '$email' AND senha = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login bem-sucedido
        // Obter o ID do usuário
        $row = $result->fetch_assoc();
        $user_id = $row['id'];

        // Armazenar o ID do usuário na sessão
        $_SESSION['user_id'] = $user_id;

        // Redirecionar para a página de início
        header("Location: http://127.0.0.1:5501/home-page/home.html");
        exit();
    } else {
        // Login falhou
        echo "Email ou senha incorretos.";
    }
}

$conn->close();
?>
