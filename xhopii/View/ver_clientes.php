<?php

require_once("../Model/BancoDeDados.php");

$banco = new BancoDeDados();
$conexao = $banco->conectar();

$sql = "SELECT * FROM clientes";

$query = $conexao->prepare($sql);
$query->execute();

$clientes = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Xhopii - Clientes</title>
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
</style>

</head>
<body>

<main class="container">

<h2>Clientes Cadastrados</h2>

<table>
<tr>
<th>Nome</th>
<th>CPF</th>
<th>Email</th>
<th>Telefone</th>
</tr>

<?php foreach($clientes as $cliente){ ?>
<tr>
<td><?= $cliente['nome'] ?></td>
<td><?= $cliente['cpf'] ?></td>
<td><?= $cliente['email'] ?></td>
<td><?= $cliente['telefone'] ?></td>
</tr>
<?php } ?>

</table>

</main>

</body>
</html>