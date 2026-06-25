<?php

class Funcionario
{
    private $nome;
    private $matricula;
    private $cargo;
    private $salario;

    public function __construct($nome, $matricula, $cargo, $salario)
    {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }
}
public function exibirDados()
{
    return $this->nome . " - " . $this->cargo;
}