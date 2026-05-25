<?php
session_start();
require_once __DIR__ . '/../controller/Controlador.php';

$controlador = new Controlador();

// Identifica se a requisição veio do formulário de Cliente
if (isset($_POST['btnCadCliente'])) {
    $nome = $_POST['inputNome'];
    $cpf = $_POST['inputCpf'];
    $dataNasc = $_POST['inputDataNasc'];
    $endereco = $_POST['inputEndereco'];
    $email = $_POST['inputEmail'];
    $telefone = $_POST['inputTelefone'];

    $controlador->cadastrarCliente($nome, $cpf, $dataNasc, $endereco, $email, $telefone);
    
    // Redireciona de volta para a view com uma mensagem de sucesso
    header('Location: ../view/cad_cliente.php?status=success');
    die();
}

// Identifica se a requisição veio do formulário de Funcionário
if (isset($_POST['btnCadFuncionario'])) {
    $nome = $_POST['inputNome'];
    $cpf = $_POST['inputCpf'];
    $dataNasc = $_POST['inputDataNasc'];
    $cargo = $_POST['inputCargo'];
    $salario = $_POST['inputSalario'];
    $email = $_POST['inputEmail'];
    $telefone = $_POST['inputTelefone'];

    $controlador->cadastrarFuncionario($nome, $cpf, $dataNasc, $cargo, $salario, $email, $telefone);
    
    header('Location: ../view/cad_funcionario.php?status=success');
    die();
}
?>