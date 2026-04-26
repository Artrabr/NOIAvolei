<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css?v=1">
</head>
<body>
    <header>
        <div><a href="index.php">Voltar a Pagina inicial</a></div>
        <div class="logo_header"><a href="index.php"><img src="imagens/logonoiasemefeito.png" alt="LogoNoiaLoja"></a></div>
        <div></div>
    </header>
    <div class="filterbar">
        <h1>Login/Registro</h1>
    </div>
    <main>
        <?php
            $linhas = file("planilhas/usuarios.csv");

            echo "<div class='products'>";

            foreach ($linhas as $linha) {

                $dados = explode(";", trim($linha));

                if ($dados[0] == "ID") continue;

                $nome = $dados[1];
                $email = $dados[2];

                echo "
                <div class='card'>
                    <h3>$nome</h3>
                    <p>Email: $email</p>
                </div>
                ";
            }

            echo "</div>";
        ?>
    <footer>
        <p>&copy; 2023 NoiaLoja. Todos os direitos reservados.</p>
    </footer>
</body>
</html>