<?php
require_once("../controller/Controlador.php");

$controlador = new Controlador();
$produtos = $controlador->visualizarProdutos();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii - Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<header class="main-header">
    <section class="header-top">
        <section class="logo-area">
            <img src="../img/logo.png" alt="Xhopii Logo">
            <span>Xhopii</span>
        </section>
      <a href="../Processamento/Processamento.php?tipo=logout"
   class="exit-link">
   Sair
</a>
    </section>

    <nav class="nav-bar">
        <a href="home.php" class="active">Home</a>
        <a href="cad_cliente.php">Cadastro Cliente</a>
        <a href="cad_funcionario.php">Cadastro Funcionário</a>
        <a href="cad_produto.php">Cadastro Produto</a>
        <a href="cad_loja.php">Cadastro Loja</a>
        <a href="cad_cupom.php">Cadastro Cupom</a>
        <a href="ver_clientes.php">Ver Clientes</a>
        <a href="ver_funcionarios.php">Ver Funcionários</a>
        <a href="ver_produtos.php">Ver Produtos</a>
        <a href="ver_lojas.php">Ver Lojas</a>
        <a href="ver_cupons.php">Ver Cupons</a>
    </nav>
</header>

<main class="home-container">

    <section id="carrossel" class="carousel slide" data-bs-ride="carousel">
        <section class="carousel-inner">
            <article class="carousel-item active">
                <img src="../img/logo2.png" alt="Xhopii">
            </article>
            <article class="carousel-item">
                <img src="../img/logo3.png" alt="Promoção">
            </article>
        </section>

        <button class="carousel-control-prev" type="button" data-bs-target="#carrossel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carrossel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </section>

    <section class="promo-banner">
        <img src="../img/logo3.png" alt="Exclusivo na 1ª compra">
    </section>

    <p class="descobertas-title">DESCOBERTAS DO DIA</p>

    <section class="products-grid">

        <?php while($produto = mysqli_fetch_assoc($produtos)){ ?>

            <?php
                $imagemProduto = "../img/produto1.png";

                if(isset($produto["foto_produto"]) && !empty($produto["foto_produto"])){
                    $imagemProduto = $produto["foto_produto"];
                }
            ?>

            <article class="product-card">
                <a href="#">
                    <img src="<?php echo $imagemProduto; ?>" alt="<?php echo $produto["nome"]; ?>">
                </a>

                <section class="product-info">
                    <h3><?php echo $produto["nome"]; ?></h3>

                    <p>
                        <strong>Fabricante:</strong>
                        <?php echo $produto["fabricante"]; ?>
                    </p>

                    <p>
                        <strong>Descrição:</strong>
                        <?php echo $produto["descricao"]; ?>
                    </p>

                    <section class="product-footer">
                        <span class="price">
                            R$ <?php echo number_format($produto["valor"], 2, ",", "."); ?>
                        </span>

                        <span class="stock">
                            <?php echo $produto["quantidade"]; ?> disponíveis
                        </span>
                    </section>
                </section>
            </article>

        <?php } ?>

    </section>

</main>

<footer class="main-footer">
    <section class="footer-grid">
        <section>
            <h3>ATENDIMENTO AO CLIENTE</h3>
            <ul>
                <li>Central de Ajuda</li>
                <li>Como Comprar</li>
                <li>Métodos de Pagamento</li>
                <li>Garantia Xhopii</li>
                <li>Devolução e Reembolso</li>
                <li>Fale Conosco</li>
                <li>Ouvidoria</li>
            </ul>
        </section>

        <section>
            <h3>SOBRE A XHOPII</h3>
            <ul>
                <li>Sobre Nós</li>
                <li>Políticas Xhopii</li>
                <li>Política de Privacidade</li>
                <li>Programa de Afiliados da Xhopii</li>
                <li>Seja um Entregador Xhopii</li>
                <li>Ofertas Relâmpago</li>
                <li>Xhopii Blog</li>
                <li>Imprensa</li>
            </ul>
        </section>

        <section>
            <h3>PAGAMENTO</h3>
            <section class="pagamento-imgs">
                <img src="../img/visa.png" alt="Visa">
                <img src="../img/mastercard.png" alt="Mastercard">
                <img src="../img/pix.png" alt="Pix">
                <img src="../img/boleto.png" alt="Boleto">
                <img src="../img/elo.png" alt="Elo">
                 <img src="../img/hipercard.png" alt="Hipercard">
            </section>
        </section>

        <section class="redes-sociais">

    <a href="#">
        <img src="../img/instagram.jpg" alt="Instagram">
    </a>

    <a href="#">
        <img src="../img/twitter.png" alt="Twitter">
    </a>

    <a href="#">
        <img src="../img/facebook.jpg" alt="Facebook">
    </a>

    <a href="#">
        <img src="../img/Youtube.png" alt="YouTube">
    </a>

    <a href="#">
        <img src="../img/linkedin.jpg" alt="LinkedIn">
    </a>

</section>

        <section>
            <h3>ATENDIMENTO AO CLIENTE</h3>
            <img src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Xhopii" width="80" alt="QR Code">
            <p class="app-text">Disponível na Google Play e App Store</p>
        </section>
    </section>

    <p class="copyright">
        © 2026 Xhopii. Todos os direitos acadêmicos reservados
    </p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>