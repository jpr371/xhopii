<?php
class Funcionario {
    private $nome;
    private $cpf;
    private $dataNasc;
    private $cargo;
    private $salario;
    private $email;
    private $telefone;

    public function __construct($nome, $cpf, $dataNasc, $cargo, $salario, $email, $telefone) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->email = $email;
        $this->telefone = $telefone;
    }

    public function __get($atributo) {
        return $this->$atributo;
    }

    public function __set($atributo, $valor) {
        $this->$atributo = $valor;
    }
}
?>