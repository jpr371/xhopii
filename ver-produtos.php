<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii - Visualizar Produtos</title>
    <!-- Ligação com o CSS organizado -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Cabeçalho Principal (Laranja Oficial) -->
    <header class="main-header">
        <div class="header-top">
            <div class="logo-area">
                <img src="img/logo.png" alt="Xhopii Logo">
                <span class="logo-text">Xhopii</span>
            </div>
            <a href="login.php" class="exit-link">Sair</a>
        </div>
        
        <!-- Barra de Navegação Secundária -->
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

    <!-- Conteúdo Principal -->
    <main class="container">
        <h2 class="section-title">PRODUTOS</h2>
        
        <!-- Malha de Produtos usando Grid Layout (5 Colunas conforme imagem) -->
        <section class="products-grid">
            
            <!-- Início do Card de Produto (Exemplo que se repete) -->
            <!-- Bloco 1 -->
            <article class="product-card">
                <img src="img/produto1.png" alt="Camisa Desenvolvedor">
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

            <!-- Bloco 2 -->
            <article class="product-card">
                <img src="img/produto2.png" alt="Camisa Desenvolvedor">
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

            <!-- Bloco 3 -->
            <article class="product-card">
                <img src="img/produto3.png" alt="Camisa Desenvolvedor">
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

            <!-- Bloco 4 -->
            <article class="product-card">
                <img src="img/produto4.png" alt="Camisa Desenvolvedor">
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

            <!-- Bloco 5 -->
            <article class="product-card">
                <img src="img/produto5.png" alt="Camisa Desenvolvedor">
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

            <!-- Linha 2 do Grid (Simulada conforme imagem) -->
            <article class="product-card">
                <img src="img/produto1.png" alt="Camisa">
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

            <article class="product-card">
                <img src="img/produto2.png" alt="Camisa">
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

            <article class="product-card">
                <img src="img/produto3.png" alt="Camisa">
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

            <!-- Card em destaque/selecionado (conforme borda laranja na imagem) -->
            <article class="product-card" style="border-color: #ee4d2d;">
                <img src="img/produto4.png" alt="Camisa">
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

            <article class="product-card">
                <img src="img/produto5.png" alt="Camisa">
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

    <!-- Rodapé Completo (Grid Layout conforme PDF) -->
    <footer class="main-footer">
        <div class="footer-grid">
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
                <div class="payment-methods">
                    <p>Visa, Mastercard, Pix, Boleto, Elo</p>
                    <!-- Aqui você pode inserir as imagens de bandeiras de cartões -->
                </div>
            </section>

            <section>
                <h3>SIGA-NOS</h3>
                <ul>
                    <li>Instagram</li>
                    <li>Twitter</li>
                    <li>Facebook</li>
                    <li>YouTube</li>
                    <li>LinkedIn</li>
                </ul>
            </section>

            <section>
                <h3>ATENDIMENTO AO CLIENTE</h3>
                <div class="qr-code-area">
                    <img src="img/qr-code.png" alt="QR Code App" width="80">
                    <p>Disponível na Google Play e App Store</p>
                </div>
            </section>
        </div>
        <p class="copyright">© 2023 Xhopii. Todos os direitos acadêmicos reservados</p>
    </footer>

</body>
</html>