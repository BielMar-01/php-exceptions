<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(new CPF('123.456.789-10'),
        'Gabriel Marques', new Endereco('Cidade', 'bairro', 'rua', 'numero'))
);

try{
    $contaCorrente->deposita(-100);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo, seu hacker perigoso";
}

