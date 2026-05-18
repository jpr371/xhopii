<?php

class BancoDeDados{

    private $host;
    private $login;
    private $senha;
    private $dataBase;

    public function __construct($Host, $Login, $Senha, $DataBase){
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
    }

    // Método para conectar ao Banco de Dados
    public function conectarBD(){
        $conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
        return $conexao;
    }
    
    // ==========================================
    // CLIENTES
    // ==========================================
    public function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){
        $conexao = $this->conectarBD(); // Correção: adicionado $this->
        $consulta = "INSERT INTO cliente (cpf, nome, sobrenome, dataNascimento, telefone, email, senha) 
                     VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$senha')";
        mysqli_query($conexao, $consulta);
    }
    
    public function retornarClientes(){
        $conexao = $this->conectarBD(); // Correção: adicionado $this->
        $consulta = "SELECT * FROM cliente";
        $listaClientes = mysqli_query($conexao, $consulta);
        return $listaClientes;
    }

    // ==========================================
    // PRODUTOS
    // ==========================================
    public function inserirProduto($produto){
        $conexao = $this->conectarBD(); // Correção: adicionado $this->
        $consulta = "INSERT INTO produto (nome, fabricante, descricao, valor) 
                     VALUES ('{$produto->get_Nome()}',
                             '{$produto->get_Fabricante()}',
                             '{$produto->get_Descricao()}',
                             '{$produto->get_Valor()}')";
        mysqli_query($conexao, $consulta);
    }
    
    public function retornarProdutos(){
        $conexao = $this->conectarBD(); // Correção: adicionado $this->
        $consulta = "SELECT * FROM produto";
        $listaProdutos = mysqli_query($conexao, $consulta);
        return $listaProdutos;
    }
    
    // ==========================================
    // FUNCIONÁRIOS
    // ==========================================
    public function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario){
        $conexao = $this->conectarBD(); // Correção: adicionado $this->
        $consulta = "INSERT INTO funcionario (cpf, nome, sobrenome, dataNascimento, telefone, email, salario) 
                     VALUES ('$cpf','$nome','$sobrenome','$dataNasc','$telefone','$email','$salario')";
        mysqli_query($conexao, $consulta);
    }

    public function retornarFuncionarios(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM funcionario";
        $listaFuncionarios = mysqli_query($conexao, $consulta);
        return $listaFuncionarios;
    }

    // ==========================================
    // LOJAS (Adicionado conforme o cad_loja.html)
    // ==========================================
    public function inserirLoja($cnpj, $nome, $categoria, $endereco, $telefone, $email, $descricao){
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO loja (cnpj, nome, categoria, endereco, telefone, email, descricao) 
                     VALUES ('$cnpj', '$nome', '$categoria', '$endereco', '$telefone', '$email', '$descricao')";
        mysqli_query($conexao, $consulta);
    }

    public function retornarLojas(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM loja";
        $listaLojas = mysqli_query($conexao, $consulta);
        return $listaLojas;
    }

    // ==========================================
    // CUPONS (Adicionado conforme o cad_cupons.html)
    // ==========================================
    public function inserirCupom($codigo, $desconto, $tipo, $validade, $quantidade){
        $conexao = $this->conectarBD();
        $consulta = "INSERT INTO cupom (codigo, desconto, tipo, validade, quantidade) 
                     VALUES ('$codigo', '$desconto', '$tipo', '$validade', '$quantidade')";
        mysqli_query($conexao, $consulta);
    }

    public function retornarCupons(){
        $conexao = $this->conectarBD();
        $consulta = "SELECT * FROM cupom";
        $listaCupons = mysqli_query($conexao, $consulta);
        return $listaCupons;
    }

}

?>