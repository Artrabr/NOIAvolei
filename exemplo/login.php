<?php
session_start();

$email = $_POST['email'] ?? '';
$senha = $_POST['senha'] ?? '';

$arquivo = fopen("usuarios.csv", "r");

while (($linha = fgetcsv($arquivo)) !== false) {
    // pula o cabeçalho
    if ($linha[0] == "id") continue;

    $id = $linha[0];
    $email_csv = $linha[1];
    $senha_csv = $linha[2];

    if ($email == $email_csv && $senha == $senha_csv) {
        $_SESSION['usuario_id'] = $id;

        header("Location: dashboard.php");
        exit;
    }
}

echo "Login inválido";
?>