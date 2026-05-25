<?php
class Cliente {
    // Atributos privados garantindo o encapsulamento
    private $nome;
    private $cpf;
    private $dataNasc;
    private $endereco;
    private $email;
    private $telefone;

    // Construtor para inicializar o objeto com dados básicos
    public function __construct($nome, $cpf, $dataNasc, $endereco, $email, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    // Método mágico __get para ler atributos privados de forma segura
    public function __get($atributo) {
        return $this->$atributo;
    }

    // Método mágico __set para alterar atributos privados de forma segura
    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}
?>