<?php

function a (): int
{
    try {
        echo "Codigo" . PHP_EOL;
        return 0;
    } catch (Throwable $e) {
        echo "Problema" . PHP_EOL;
        return 1;
    } finally {
        echo "Final da função" . PHP_EOL;
    }
}

echo a();
