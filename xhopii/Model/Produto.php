<?php

class Produto {

    private $nome;
    private $fabricante;
    private $descricao;
    private $valor;
    private $quantidade;

    public function __construct($nome, $fabricante, $descricao, $valor, $quantidade){
        $this->nome = $nome;
        $this->fabricante = $fabricante;
        $this->descricao = $descricao;
        $this->valor = $valor;
        $this->quantidade = $quantidade;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getFabricante(){
        return $this->fabricante;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getQuantidade(){
        return $this->quantidade;
    }
}
?>