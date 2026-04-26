<?php
    session_start();
    $id = $_GET['id'] ?? '';

    if (!$id) {
        header('Location: NoiaLoja.php');
        exit;
    }

    $linhas = file("planilhas/estoque.csv");
    $produto = null;

    foreach ($linhas as $linha) {
        $dados = explode(";", trim($linha));
        if ($dados[0] == $id) {
            $produto = [
                'id' => $dados[0],
                'nome' => $dados[1],
                'preco' => $dados[2],
                'estoque' => $dados[3],
                'imagem' => $dados[4]
            ];
            break;
        }
    }

    if (!$produto) {
        header('Location: NoiaLoja.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $produto['nome']; ?> - Noia Esportes</title>
    <link rel="stylesheet" href="css/index.css?v=3">
    <link rel="stylesheet" href="css/footer.css?v=3">
</head>
<body>
    <header>
        <div><a href="index.php">Voltar a Pagina inicial</a></div>
        <div class="logo_header"><a href="index.php"><img src="imagens/logonoiasemefeito.png" alt="LogoNoiaLoja"></a></div>
        <div><button onclick="window.location.href='cadastro.php'">Login</button></div>
    </header>
    <div class="filterbar">
        <a href="NoiaLoja.php#camisas" class="a_estilobotaoazul">Voltar à Loja</a>
    </div>
    <main>
        <div class="produto-detalhes">
            <div class="produto-imagem">
                <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
            </div>
            <div class="produto-info">
                <h1><?php echo $produto['nome']; ?></h1>
                <p class="preco">R$ <?php echo $produto['preco']; ?></p>
                <p>Estoque: <?php echo $produto['estoque']; ?> unidades</p>
                <button class="btn" onclick="addToCart(<?php echo $produto['id']; ?>)">Adicionar ao Carrinho</button>
            </div>
        </div>
    </main>
    <footer>
        <div class="brands_footer">
            <div>
                <img src="imagens/logonoiasemefeito.png" alt="LogoNoia">
                <p>&copy; Noia Esportes</p>
            </div>
            <div class="brands_footer_logos">
                <h4>Patrocinadores</h4>
                <a href="https://www.vidafarmacias.com.br" target="_blank"><img src="imagens/patrocinios/vidafarmaciaslogo.png" alt="Vida Farmacias"></a>
                <a href="http://www.rdxengenharia.com"><img src="imagens/patrocinios/ABRAXlogo.png" alt="ABRAX"></a>
            </div>
        </div>
        <div>
            <div class="contact_footer" id="contact">
                <a href="https://www.instagram.com/noiavolei?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank">Instagram</a>
                <a href="https://www.youtube.com/@NOIANH-BR" target="_blank">Youtube</a>
                <a href="https://wa.me/5551996856468" target="_blank">Whatsapp</a>
                <p>noiayt.nh@gmail.com</p>
            </div>
        </div>
    </footer>

    <script>
        function addToCart(id) {
            // Implementar lógica do carrinho aqui
            alert('Produto adicionado ao carrinho!');
        }
    </script>
</body>
</html>