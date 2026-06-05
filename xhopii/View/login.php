<?php
session_start();

if(isset($_SESSION["usuario"])){
    header("Location: home.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login - Xhopii</title>

<link rel="stylesheet" href="../css/style.css">

<style>
.login-container{
    width:100%;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:#f5f5f5;
}

.login-card{
    width:400px;
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 0 15px rgba(0,0,0,.1);
}

.login-card h2{
    text-align:center;
    color:#EE4D2D;
    margin-bottom:20px;
}

.login-card input,
.login-card select{
    width:100%;
    padding:12px;
    margin-bottom:15px;
    border:1px solid #ddd;
    border-radius:8px;
}

.login-card button{
    width:100%;
    padding:12px;
    background:#EE4D2D;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
    font-weight:bold;
}

.login-card button:hover{
    background:#d84324;
}

.links-login{
    margin-top:15px;
    text-align:center;
}

.links-login a{
    color:#EE4D2D;
    text-decoration:none;
}
</style>

</head>
<body>

<section class="login-container">

    <section class="login-card">

        <h2>Xhopii Login</h2>

        <form method="POST" action="../Processamento/Processamento.php">
    <input type="hidden" name="tipo" value="login">

<input type="email" name="email" placeholder="Email" required>
<input type="password" name="senha" placeholder="Senha" required>

    <select name="tipo_usuario" required>
        <option value="">Selecione o tipo</option>
        <option value="cliente">Cliente</option>
        <option value="funcionario">Funcionário</option>
    </select>

    <button type="submit" class="btn-principal">ENTRAR</button>
</form>

        <section class="links-login">
            <a href="cad_cliente.php">
                Criar conta de cliente
            </a>
            <br><br>
            <a href="cad_funcionario.php">
                Criar conta de funcionário
            </a>
        </section>

    </section>

</section>

</body>
</html>