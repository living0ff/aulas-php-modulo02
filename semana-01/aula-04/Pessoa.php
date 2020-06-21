<?php

require_once('Trabalho.php');

class Pessoa extends Trabalho {

    private $salario;

    public function __construct()
    {
        $this->salario = 500;

    }

    function calculaSalario(int $ajuste) {
        return $this->salario + $ajuste;
    }
    function getSalario() {
        return $this->salario;
    }

    function setSalario($salarioajuste) {
        $this->salario = $salarioajuste;
    }

    public function obterDados(string $nome) {
        $this->setNome($nome);

        return $this->padronizaNome();
    }
}

    