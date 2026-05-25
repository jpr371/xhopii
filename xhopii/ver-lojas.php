<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii - Ver Lojas</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Estilos específicos para a grade de lojas baseados na imagem */
        .lojas-grid {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 20px;
            margin-top: 20px;
        }

        .loja-card {
            background: white;
            border: 1px solid #e0e0e0;
            padding: 15px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            transition: transform 0.2s;
        }

        .loja-card:hover {
            border-color: #ee4d2d;
            transform: translateY(-5px);
        }

        .loja-logo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #f5f5f5;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #eee;
        }

        .loja-logo img {
            width: 50px;
            height: auto;
        }

        .loja-info h3 {
            font-size: 14px;
            margin-bottom: 8px;
            color: #333;
        }

        .loja-info p {
            font-size: 12px;
            color: #757575;
            margin-bottom: 15px;
            height: 36px;
            overflow: hidden;
        }

        .btn-ver-loja {
            background: transparent;
            border: 1px solid #ee4d2d;
            color: #ee4d2d;
            padding: 8px 15px;
            font-size: 12px;
            cursor: pointer;
            width: 100%;
            font-weight: bold;
        }

        .btn-ver-loja:hover {
            background: #ee4d2d;
            color: white;
        }
    </style>
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
            <a href="ver-produtos.php">Ver Produtos</a>
            <a href="ver-lojas.php" class="active">Ver Lojas</a>
        </nav>
    </header>

    <main class="container">
        <h2 class="section-title">LOJAS</h2>
        
        <section class="lojas-grid">
            <!-- Loja 1 -->
            <article class="loja-card">
                <div class="loja-logo">
                    <img src="img/logo.png" alt="Logo Loja">
                </div>
                <div class="loja-info">
                    <h3>Xhopii Oficial</h3>
                    <p>A loja oficial com os melhores produtos do Brasil.</p>
                    <button class="btn-ver-loja">Ver Loja</button>
                </div>
            </article>

            <!-- Loja 2 -->
            <article class="loja-card">
                <div class="loja-logo">
                    <img src="img/logo.png" alt="Logo Loja">
                </div>
                <div class="loja-info">
                    <h3>Eletiva Uniformes</h3>
                    <p>Qualidade e conforto para o seu dia a dia.</p>
                    <button class="btn-ver-loja">Ver Loja</button>
                </div>
            </article>

            <!-- Repetindo para preencher a grade conforme a imagem -->
            <article class="loja-card">
                <div class="loja-logo"><img src="img/logo.png" alt="Logo"></div>
                <div class="loja-info">
                    <h3>Tech Store</h3>
                    <p>Tudo em tecnologia e gadgets inovadores.</p>
                    <button class="btn-ver-loja">Ver Loja</button>
                </div>
            </article>

            <article class="loja-card">
                <div class="loja-logo"><img src="img/logo.png" alt="Logo"></div>
                <div class="loja-info">
                    <h3>Moda Fashion</h3>
                    <p>As últimas tendências da moda mundial.</p>
                    <button class="btn-ver-loja">Ver Loja</button>
                </div>
            </article>

            <article class="loja-card">
                <div class="loja-logo"><img src="img/logo.png" alt="Logo"></div>
                <div class="loja-info">
                    <h3>Casa & Lazer</h3>
                    <p>Sua casa muito mais bonita e confortável.</p>
                    <button class="btn-ver-loja">Ver Loja</button>
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
                <p>Cartão, Pix, Boleto</p>
            </section>
            <section>
                <h3>SIGA-NOS</h3>
                <ul>
                    <li>Instagram</li>
                    <li>Facebook</li>
                </ul>
            </section>
            <section>
                <h3>APP XHOPII</h3>
                <p>QR Code</p>
            </section>
        </div>
        <p class="copyright">© 2026 Xhopii. Todos os direitos acadêmicos reservados</p>
    </footer>
</body>
</html>