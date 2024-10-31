<?php

class Animal
{
    protected $nome;
    protected $raca;

    public function __construct($n, $r)
    {
        $this->nome = $n;
        $this->raca = $r;
    }

    //metodos
    public function getDados()
    {
        return "Nome: " . $this->nome . "\nRaça:" . $this->raca;
    }

    //gets e setts
    
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getRaca()
    {
        return $this->raca;
    }

    public function setRaca($raca): self
    {
        $this->raca = $raca;

        return $this;
    }
}