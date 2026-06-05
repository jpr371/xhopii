<?php

class Funcionario{

    protected $nome;
    protected $cpf;
    protected $cargo;
    protected $salario;
    protected $telefone;
    protected $email;
    protected $senha;

    public function __construct($nome, $cpf, $cargo, $salario, $telefone, $email, $senha){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
        $this->salario = $salario;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->senha = $senha;

    }

    public function getNome(){ return $this->nome; }
    public function getCpf(){ return $this->cpf; }
    public function getCargo(){ return $this->cargo; }
    public function getSalario(){ return $this->salario; }
    public function getTelefone(){ return $this->telefone; }
    public function getEmail(){ return $this->email; }
    public function getSenha(){ return $this->senha; }

}

?>