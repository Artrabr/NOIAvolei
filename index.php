<?php
    session_start();
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
        <a href="" class="a_estilobotaoazul">Equipes</a>
        <a href="NoiaLoja.php" class="a_estilobotaoazul">Loja</a>
        <a href="" class="a_estilobotaoazul">Quem Somos</a>
        <a href="#contact" class="a_estilobotaoazul">Contato</a>
    </div>
    <main>
        <div class="banner_display"><!--banner principal que se altera-->
            <img src="imagens/banners/cb30mars_torneioadulto.png" alt="Banner Principal">
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
</body>
</html>