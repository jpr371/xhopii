<?php

require_once("../Model/BancoDeDados.php");

$banco = new BancoDeDados();
$conexao = $banco->conectar();

$sql = "SELECT * FROM funcionarios";

$query = $conexao->prepare($sql);
$query->execute();

$funcionarios = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Xhopii - Funcionários</title>

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

<h2>Funcionários Cadastrados</h2>

<table>

<tr>

<th>Nome</th>
<th>CPF</th>
<th>Cargo</th>
<th>Salário</th>
<th>Telefone</th>
<th>Email</th>

</tr>

<?php foreach($funcionarios as $funcionario){ ?>

<tr>

<td><?= $funcionario['nome'] ?></td>

<td><?= $funcionario['cpf'] ?></td>

<td><?= $funcionario['cargo'] ?></td>

<td>R$ <?= $funcionario['salario'] ?></td>

<td><?= $funcionario['telefone'] ?></td>

<td><?= $funcionario['email'] ?></td>

</tr>

<?php } ?>

</table>

</main>

</body>

</html>