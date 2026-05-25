<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xhopii - Cadastro de Funcionário</title>
</head>
<body>
    <section class="conteudo-cadastro">
        <h2>Cadastrar Funcionário</h2>

        <?php if(isset($_GET['status']) && $_GET['status'] == 'success'): ?>
            <p style="color: green;">Funcionário cadastrado com sucesso!</p>
        <?php endif; ?>

        <form method="POST" action="../processamento/processamento.php">
            <label>Nome:</label>
            <input type="text" name="inputNome" required><br><br>

            <label>CPF:</label>
            <input type="text" name="inputCpf" required><br><br>

            <label>Data de Nascimento:</label>
            <input type="date" name="inputDataNasc" required><br><br>

            <label>Cargo:</label>
            <input type="text" name="inputCargo" required><br><br>

            <label>Salário:</label>
            <input type="number" step="0.01" name="inputSalario" required><br><br>

            <label>E-mail:</label>
            <input type="email" name="inputEmail" required><br><br>

            <label>Telefone:</label>
            <input type="text" name="inputTelefone" required><br><br>

            <input type="submit" name="btnCadFuncionario" value="Cadastrar">
        </form>
    </section>
</body>
</html>