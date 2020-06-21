<?php

require_once('pessoa.php');

$pessoa = new Pessoa();


//echo $pessoa->setSalario(1500);

//echo $pessoa->getSalario();

//echo $pessoa->calculaSalario(1400);

echo $pessoa->obterDados('Lucas Emanuel');

