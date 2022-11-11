<?php

class MinhaExcecao extends DomainException
{
    public function exibeGabriel()
    {
        echo "Gabriel";
    }
}

try {
    throw new MinhaExcecao();
} catch (MinhaExcecao $e) {
    $e->exibeGabriel();
}

