<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Xhopii - Cadastro Produto</title>

<link rel="stylesheet" href="style.css">

<style>

.form-produto{
    width:500px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.1);
}

.form-produto h2{
    color:#EE4D2D;
    margin-bottom:20px;
}

.form-produto input,
.form-produto textarea{

    width:100%;
    padding:12px;
    margin-bottom:15px;

    border:1px solid #ddd;
    border-radius:5px;
}

.botao{

    width:100%;
    background:#EE4D2D;
    color:white;
    border:none;
    padding:12px;
    border-radius:5px;
    cursor:pointer;
}

.botao:hover{
    opacity:.9;
}

</style>

</head>

<body>

<header class="main-header">

<section class="header-top">

<section class="logo-area">
<img src="img/logo.png">
<span>Xhopii</span>
</section>

<a href="login.html" class="exit-link">
Sair
</a>

</section>

<nav class="nav-bar">

<a href="home.html">Home</a>
<a href="cad_cliente.html">Cadastro Cliente</a>
<a href="cad_funcionario.html">Cadastro Funcionário</a>
<a href="cad_produto.php" class="active">
Cadastro Produto
</a>

</nav>

</header>


<main>

<form class="form-produto"
method="POST"
action="../Processamento/Processamento.php"
enctype="multipart/form-data">

<input
type="hidden"
name="tipo"
value="produto">

<h2>Cadastrar Produto</h2>

<input
type="text"
name="nome"
placeholder="Nome do Produto"
required>

<input
type="text"
name="fabricante"
placeholder="Fabricante"
required>

<textarea
name="descricao"
placeholder="Descrição"
required></textarea>

<input
type="number"
step="0.01"
name="valor"
placeholder="Preço"
required>

<input
type="number"
name="quantidade"
placeholder="Quantidade"
required>

<label>Foto do produto:</label>

<input
type="file"
name="foto_produto">

<button
type="submit"
class="botao">

CADASTRAR

</button>

</form>

</main>

</body>
</html>