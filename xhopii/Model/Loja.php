<?php

class Loja{

    protected $nome;
    protected $cnpj;
    protected $categoria;
    protected $endereco;
    protected $telefone;
    protected $email;
    protected $descricao;
    protected $logo_loja;

    public function __construct(
        $nome,
        $cnpj,
        $categoria,
        $endereco,
        $telefone,
        $email,
        $descricao,
        $logo_loja
    ){

        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->categoria = $categoria;
        $this->endereco = $endereco;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->descricao = $descricao;
        $this->logo_loja = $logo_loja;

    }

    public function getNome(){ return $this->nome; }
    public function getCnpj(){ return $this->cnpj; }
    public function getCategoria(){ return $this->categoria; }
    public function getEndereco(){ return $this->endereco; }
    public function getTelefone(){ return $this->telefone; }
    public function getEmail(){ return $this->email; }
    public function getDescricao(){ return $this->descricao; }
    public function getLogoLoja(){ return $this->logo_loja; }

}
?>