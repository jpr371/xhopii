<?php

require_once("../Model/BancoDeDados.php");
require_once("../Model/Produto.php");
require_once("../Model/Cliente.php");
require_once("../Model/Funcionario.php");
require_once("../Model/Loja.php");
require_once("../Model/Cupom.php");

class Controlador{

    private $bancoDeDados;

    public function __construct(){

        $this->bancoDeDados = new BancoDeDados(
            "localhost",
            "root",
            "",
            "xhopii"
        );

    }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor, $quantidade, $foto_produto){

        $produto = new Produto($nome, $fabricante, $descricao, $valor, $quantidade, $foto_produto);
        $this->bancoDeDados->inserirProduto($produto);

    }

    public function visualizarProdutos(){
        return $this->bancoDeDados->retornarProdutos();
    }

    public function cadastrarCliente($nome, $cpf, $email, $telefone, $data_nascimento, $senha){

        $cliente = new Cliente($nome, $cpf, $email, $telefone, $data_nascimento, $senha);
        $this->bancoDeDados->inserirCliente($cliente);

    }

    public function visualizarClientes(){
        return $this->bancoDeDados->retornarClientes();
    }

    public function cadastrarFuncionario($nome, $cpf, $cargo, $salario, $telefone, $email, $senha){

        $funcionario = new Funcionario($nome, $cpf, $cargo, $salario, $telefone, $email, $senha);
        $this->bancoDeDados->inserirFuncionario($funcionario);

    }

    public function visualizarFuncionarios(){
        return $this->bancoDeDados->retornarFuncionarios();
    }

    public function cadastrarLoja($nome, $cnpj, $categoria, $endereco, $telefone, $email, $descricao, $logo_loja){

        $loja = new Loja($nome, $cnpj, $categoria, $endereco, $telefone, $email, $descricao, $logo_loja);
        $this->bancoDeDados->inserirLoja($loja);

    }

    public function visualizarLojas(){
        return $this->bancoDeDados->retornarLojas();
    }

    public function cadastrarCupom($codigo, $desconto, $tipo_desconto, $validade, $quantidade_usos, $valor_minimo_pedido, $descricao){

        $cupom = new Cupom($codigo, $desconto, $tipo_desconto, $validade, $quantidade_usos, $valor_minimo_pedido, $descricao);
        $this->bancoDeDados->inserirCupom($cupom);

    }

    public function visualizarCupons(){
        return $this->bancoDeDados->retornarCupons();
    }

    public function loginCliente($email, $senha){
        return $this->bancoDeDados->loginCliente($email, $senha);
    }

    public function loginFuncionario($email, $senha){
        return $this->bancoDeDados->loginFuncionario($email, $senha);
    }

}

?>