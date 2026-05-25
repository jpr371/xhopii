<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii - Cadastro de Cliente</title>
</head>
<body>
    <section class="conteudo-cadastro">
        <h2>Cadastrar Cliente</h2>
        
        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <p style="color: green;">Cliente cadastrado com sucesso!</p>
        <?php endif; ?>

        <form method="POST" action="../processamento/processamento.php">
            <label>Nome:</label>
            <input type="text" name="inputNome" required><br><br>

            <label>CPF:</label>
            <input type="text" name="inputCpf" required><br><br>

            <label>Data de Nascimento:</label>
            <input type="date" name="inputDataNasc" required><br><br>

            <label>Endereço:</label>
            <input type="text" name="inputEndereco" required><br><br>

            <label>E-mail:</label>
            <input type="email" name="inputEmail" required><br><br>

            <label>Telefone:</label>
            <input type="text" name="inputTelefone" required><br><br>

            <input type="submit" name="btnCadCliente" value="Cadastrar">
        </form>
    </section>
</body>
</html>