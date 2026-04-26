<?php
    session_start();

    // Inicializar carrinho se não existir
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    // Adicionar produto ao carrinho
    if (isset($_POST['add_to_cart'])) {
        $product_id = $_POST['product_id'];
        if (!isset($_SESSION['carrinho'][$product_id])) {
            $_SESSION['carrinho'][$product_id] = 1;
        } else {
            $_SESSION['carrinho'][$product_id]++;
        }
        $mensagem = "Produto adicionado ao carrinho!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <a href="#camisas" class="a_estilobotaoazul">Camisas</a>
        <a href="#bermudas" class="a_estilobotaoazul">Bermudas</a>
        <a href="#casacos" class="a_estilobotaoazul">Casacos</a>
        <a href="#itens" class="a_estilobotaoazul">Itens</a>
    </div>
    <main>
        <?php
            $linhas = file("planilhas/estoque.csv");

            echo "<div class='products'>";

            foreach ($linhas as $linha) {

                $dados = explode(";", trim($linha));

                if ($dados[0] == "ID") continue;

                $nome = $dados[1];
                $preco = $dados[2];
                $estoque = $dados[3];
                $imagem = $dados[4];

                echo "
                <a href='produto.php?id=$dados[0]' class='card-link'>
                <div class='card'>
                    <img src='$imagem' alt='$nome'>
                    <h3>$nome</h3>
                    <p>R$ $preco</p>
                    <form method='POST' style='margin: 0;'>
                        <input type='hidden' name='product_id' value='$dados[0]'>
                        <button type='submit' name='add_to_cart' class='btn'>Comprar</button>
                    </form>
                </div>
                </a>
                ";
            }

            echo "</div>";
        ?>
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
</body>
</html>
<script>
    function addToCart(id) {
        // Implementar lógica do carrinho aqui
        alert('Produto ' + id + ' adicionado ao carrinho!');
    }
</script>