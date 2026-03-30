<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii - Cadastrar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-header">
        <div class="header-container">
            <div class="logo-area">
                <img src="img/logo.png" alt="Xhopii Logo">
                <span>Xhopii</span>
            </div>
            <a href="index.html" class="exit-link">Sair</a>
        </div>
        <nav class="nav-bar">
            <a href="home.php">Home</a>
            <a href="cadastrar-cliente.php">Cadastro Cliente</a>
            <a href="cadastrar-funcionario.php">Cadastro Funcionário</a>
            <a href="cadastrar-produto.php" class="active">Cadastro Produto</a>
            <a href="ver-clientes.php">Ver Clientes</a>
            <a href="ver-funcionarios.php">Ver Funcionários</a>
            <a href="ver-produtos.php">Ver Produtos</a>
        </nav>
    </header>

    <main class="form-page">
        <section class="form-container">
            <h1>Cadastrar Produto</h1>
            <form action="processa_produto.php" method="POST" enctype="multipart/form-data">
                <div class="input-group">
                    <input type="text" name="nome" placeholder="Nome" required [cite: 260]>
                </div>
                <div class="input-group">
                    <input type="text" name="fabricante" placeholder="Fabricante" required [cite: 261]>
                </div>
                <div class="input-group">
                    <textarea name="descricao" placeholder="Descrição" rows="3" required [cite: 262]></textarea>
                </div>
                <div class="input-group">
                    <input type="text" name="valor" placeholder="Valor" required [cite: 263]>
                </div>
                <div class="input-group">
                    <input type="number" name="quantidade" placeholder="Quantidade" required [cite: 264]>
                </div>

                <div class="file-upload">
                    <label>Selecionar foto do produto: [cite: 265]</label>
                    <div class="file-input-wrapper">
                        <button type="button" class="btn-file">Escolher arquivo [cite: 266]</button>
                        <span>Nenhum arquivo escolhido [cite: 267]</span>
                        <input type="file" name="foto_produto">
                    </div>
                </div>

                <button type="submit" class="btn-submit">CADASTRAR </button>
            </form>
        </section>
    </main>

    <footer class="main-footer">
        <div class="footer-grid">
            <div class="footer-col">
                <h3>ATENDIMENTO AO CLIENTE [cite: 273]</h3>
                <ul>
                    <li>Central de Ajuda [cite: 274]</li>
                    <li>Como Comprar [cite: 275]</li>
                </ul>
            </div>
            </div>
        <p class="copyright">© 2026 Xhopii. Todos os direitos acadêmicos reservados. [cite: 290]</p>
    </footer>
</body>
</html>