<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Xhopii - Ver Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.png" alt="Xhopii" style="height: 40px;"> 
            <span>Xhopii</span>
        </div>
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="cadastro-cliente.php">Cadastro Cliente</a></li>
                <li><a href="ver-produtos.php">Ver Produtos</a></li>
            </ul>
        </nav>
    </header>

    <main class="product-container">
        <aside class="product-gallery">
            <img src="produto1.png" alt="Camisa Preta">
            <img src="produto2.png" alt="Camisa Azul">
            <img src="produto3.png" alt="Camisa Verde">
            <img src="produto4.png" alt="Camisa Cinza">
            <img src="produto5.png" alt="Camisa Rosa">
        </aside>

        <section class="product-image">
            <img src="produto1.png" alt="Camisa Desenvolvedor Front-End CSS">
        </section>

        <section class="product-details">
            <h1>Camisa Desenvolvedor Front-End CSS</h1>
            <p class="price">R$56,90</p>
            <p class="stock">171 peças disponíveis</p>

            <div class="options">
                <label>Modelos:</label>
                <div class="btn-group">
                    <button>Preto</button>
                    <button>Azul</button>
                    <button>Verde</button>
                    <button>Cinza</button>
                    <button>Rosa</button>
                </div>
            </div>

            <div class="options">
                <label>Tamanhos:</label>
                <div class="btn-group">
                    <button>P</button>
                    <button>M</button>
                    <button>G</button>
                    <button>GG</button>
                </div>
            </div>

            <p>Tamanho Selecionado: <strong>P</strong></p>
            <button class="buy-now">Comprar Agora</button>
        </section>
    </main>
</body>
</html>