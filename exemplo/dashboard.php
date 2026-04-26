<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    echo "Acesso negado!";
    exit;
}
?>

<h1>Dashboard</h1>
<p>Tu tá logado com ID: <?php echo $_SESSION['usuario_id']; ?></p>

<a href="logout.php">Sair</a>