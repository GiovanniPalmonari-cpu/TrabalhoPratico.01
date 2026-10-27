<?php
/******************************************************************************
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ADS2B
Componentes:
    260029592 - Giovanni Palmonari de Ramos
    260088322 - Lucas Tavares Ortega
Data: 01 de Novembro de 2026
Descritivo: Exercício de prática de desenvolvimento com PHP.
******************************************************************************/

/* Explicação: O fatorial de n é 1 x 2 x 3 x ... x n. A função rejeita números negativos; para números não negativos, multiplica os valores de 2 até n. O fatorial de 0 e de 1 é 1. */

function fatorial($numero)
{
    if ($numero < 0) {
        return null;
    }

    $resultado = 1;

    for ($i = 2; $i <= $numero; $i++) {
        $resultado = $resultado * $i;
    }

    return $resultado;
}

echo "Fatorial de 0 = " . fatorial(0) . PHP_EOL;
echo "Fatorial de 5 = " . fatorial(5) . PHP_EOL;
echo "Fatorial de 8 = " . fatorial(8) . PHP_EOL;
