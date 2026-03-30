<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii - Ver Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-header">
        <div class="header-top">
            <div class="logo-area">
                <img src="img/logo.png" alt="Xhopii Logo">
                <span>Xhopii</span>
            </div>
            <a href="login.php" class="exit-link">Sair</a>
        </div>
        <nav class="nav-bar">
            <a href="home.php">Home</a>
            <a href="cadastrar-cliente.php">Cadastro Cliente</a>
            <a href="cadastrar-funcionario.php">Cadastro Funcionário</a>
            <a href="cadastrar-produto.php">Cadastro Produto</a>
            <a href="ver-clientes.php">Ver Clientes</a>
            <a href="ver-funcionarios.php">Ver Funcionários</a>
            <a href="ver-produtos.php" class="active">Ver Produtos</a>
        </nav>
    </header>

    <main class="container">
        <h2 class="section-title">PRODUTOS</h2>
        
        <section class="products-grid">
            <article class="product-card">
                <img src="img/produto-preto.png" alt="Camisa Front-End CSS">
                <div class="product-info">
                    <h3>Camisa Desenvolvedor Front-End CSS</h3>
                    <p><strong>Fabricante:</strong> Eletiva Uniformes</p>
                    <p><strong>Descrição:</strong> Uma Camisa ideal para programar por mais de 12 horas</p>
                    <div class="product-footer">
                        <span class="price">R$ 59,90</span>
                        <span class="stock">171 disponíveis</span>
                    </div>
                </div>
            </article>

            </section>
    </main>

    <footer class="main-footer">
        <div class="footer-grid">
            <section>
                <h3>ATENDIMENTO AO CLIENTE</h3>
                <ul>
                    <li>Central de Ajuda</li>
                    <li>Como Comprar</li>
                    <li>Métodos de Pagamento</li>
                </ul>
            </section>
            <section>
                <h3>SOBRE A XHOPII</h3>
                <ul>
                    <li>Sobre Nós</li>
                    <li>Políticas Xhopii</li>
                </ul>
            </section>
            <section>
                <h3>PAGAMENTO</h3>
                <img src="img/pagamentos.png" alt="Métodos de Pagamento">
            </section>
            <section>
                <h3>SIGA-NOS</h3>
                <ul>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Facebook</li>
                </ul>
            </section>
            <section>
                <h3>ATENDIMENTO AO CLIENTE</h3>
                <img src="img/qr-code.png" alt="QR Code">
            </section>
        </div>
        <p class="copyright">© 2023 Xhopii. Todos os direitos acadêmicos reservados</p>
    </footer>
</body>
</html>