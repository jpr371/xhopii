<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Xhopii - Cadastrar Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="main-header">
        <div class="header-top">
            <div class="logo-area"><img src="img/logo.png" alt="Xhopii"><span>Xhopii</span></div>
            <a href="login.php" class="exit-link">Sair</a>
        </div>
        <nav class="nav-bar">
            <a href="home.php">Home</a>
            <a href="cadastrar-produto.php" class="active">Cadastro Produto</a>
            <a href="ver-produtos.php">Ver Produtos</a>
        </nav>
    </header>

    <main class="form-page">
        <section class="form-container">
            <h1 style="color:#ee4d2d; text-align:center; margin-bottom:20px;">Cadastrar Produto</h1>
            <form action="processa_produto.php" method="POST" enctype="multipart/form-data">
                <div class="input-group"><input type="text" name="nome" placeholder="Nome" required></div>
                <div class="input-group"><input type="text" name="fabricante" placeholder="Fabricante" required></div>
                <div class="input-group"><textarea name="descricao" placeholder="Descrição" rows="3" required></textarea></div>
                <div class="input-group"><input type="text" name="valor" placeholder="Valor" required></div>
                <div class="input-group"><input type="number" name="quantidade" placeholder="Quantidade" required></div>
                <div class="input-group">
                    <label style="font-size:12px; color:#666;">Foto do Produto:</label>
                    <input type="file" name="foto_produto" style="font-size:12px; margin-top:5px;">
                </div>
                <button type="submit" class="btn-submit">CADASTRAR</button>
            </form>
        </section>
    </main>
</body>
</html>