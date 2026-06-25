<?php

class Produto
{
    private $codigo;
    private $descricao;

    public function __construct($codigo, $descricao)
    {
        $this->codigo = $codigo;
        $this->descricao = $descricao;
    }
}
private $estoque;
public function __construct($codigo, $descricao, $estoque)
{
    $this->codigo = $codigo;
    $this->descricao = $descricao;
    $this->estoque = $estoque;
}