<?php

class Cupom{

    protected $codigo;
    protected $desconto;
    protected $tipo_desconto;
    protected $validade;
    protected $quantidade_usos;
    protected $valor_minimo_pedido;
    protected $descricao;

    public function __construct($codigo, $desconto, $tipo_desconto, $validade, $quantidade_usos, $valor_minimo_pedido, $descricao){

        $this->codigo = $codigo;
        $this->desconto = $desconto;
        $this->tipo_desconto = $tipo_desconto;
        $this->validade = $validade;
        $this->quantidade_usos = $quantidade_usos;
        $this->valor_minimo_pedido = $valor_minimo_pedido;
        $this->descricao = $descricao;

    }

    public function getCodigo(){ return $this->codigo; }
    public function getDesconto(){ return $this->desconto; }
    public function getTipoDesconto(){ return $this->tipo_desconto; }
    public function getValidade(){ return $this->validade; }
    public function getQuantidadeUsos(){ return $this->quantidade_usos; }
    public function getValorMinimoPedido(){ return $this->valor_minimo_pedido; }
    public function getDescricao(){ return $this->descricao; }

}

?>