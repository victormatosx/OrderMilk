<?php
// config.php - Arquivo de configuração para conexão com o banco de dados
$host = 'localhost';
$db = 'teste';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    die();
}
?>

<?php
// index.php - Arquivo principal
include 'config_ordenha.php';

$id = 1; // ID do animal que você deseja buscar, pode ser dinâmico

$stmt = $pdo->prepare("SELECT * FROM gado_leiteiro WHERE id = :id");
$stmt->execute(['id' => $id]);
$animal = $stmt->fetch(PDO::FETCH_ASSOC);

if ($animal) {
    echo "
    <script>
        document.getElementById('numero_brinco').textContent = '{$animal['numero_brinco']}';
        document.getElementById('nome').textContent = '{$animal['nome']}';
        document.getElementById('idade_em_meses').textContent = '{$animal['idade_em_meses']}';
        document.getElementById('lote').textContent = '{$animal['lote']}';
        document.getElementById('historico_genetico').textContent = '{$animal['historico_genetico']}';
        document.getElementById('crias').textContent = '{$animal['crias']}';
    </script>
    ";
} else {
    echo "<p>Animal não encontrado.</p>";
}
?>
