<?php

class Cliente{

    protected $nome;
    protected $cpf;
    protected $email;
    protected $telefone;
    protected $data_nascimento;
    protected $senha;

    public function __construct($nome, $cpf, $email, $telefone, $data_nascimento, $senha){

        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->data_nascimento = $data_nascimento;
        $this->senha = $senha;

    }

    public function getNome(){ return $this->nome; }
    public function getCpf(){ return $this->cpf; }
    public function getEmail(){ return $this->email; }
    public function getTelefone(){ return $this->telefone; }
    public function getDataNascimento(){ return $this->data_nascimento; }
    public function getSenha(){ return $this->senha; }

}

?>