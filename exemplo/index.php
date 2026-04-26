<?php session_start(); ?>

<h1>Home</h1>

<?php if (isset($_SESSION['usuario_id'])): ?>
    <a href="dashboard.php">Ir pro Dashboard</a>
    <br><br>
    <a href="logout.php">Sair</a>
<?php else: ?>
    <form action="login.php" method="POST">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="senha" placeholder="Senha">
        <button type="submit">Entrar</button>
    </form>
<?php endif; ?>