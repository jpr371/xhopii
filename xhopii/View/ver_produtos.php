<?php

require_once("../Model/BancoDeDados.php");

$banco = new BancoDeDados();
$conexao = $banco->conectar();

$sql = "SELECT * FROM produtos";

$query = $conexao->prepare($sql);

$query->execute();

$produtos = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Xhopii - Produtos</title>

<link rel="stylesheet" href="../css/style.css">

<style>

table{

width:100%;
border-collapse:collapse;
background:white;

}

th{

background:#EE4D2D;
color:white;
padding:12px;

}

td{

padding:12px;
border-bottom:1px solid #eee;

}

tr:hover{

background:#f8f8f8;

}

</style>

</head>

<body>

<header class="main-header">

<section class="header-top">

<section class="logo-area">

<img src="../img/logo.png">
<span>Xhopii</span>

</section>

</section>

</header>

<main class="container">

<h2>Produtos Cadastrados</h2>

<table>

<tr>

<th>Nome</th>
<th>Fabricante</th>
<th>Descrição</th>
<th>Valor</th>
<th>Quantidade</th>

</tr>

<?php foreach($produtos as $produto){ ?>

<tr>

<td><?= $produto['nome'] ?></td>

<td><?= $produto['fabricante'] ?></td>

<td><?= $produto['descricao'] ?></td>

<td>R$ <?= $produto['valor'] ?></td>

<td><?= $produto['quantidade'] ?></td>

</tr>

<?php } ?>

</table>

</main>

</body>
</html>