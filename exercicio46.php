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

/* Explicação: Números menores que 2 não são primos. Para os outros, o for testa divisores de 2 até a raiz quadrada do número. Se alguma divisão for exata, retorna false; se não encontrar divisor, retorna true. */

function ehPrimo($numero)
{
    if ($numero < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    return true;
}

$testes = [1, 2, 7, 10, 13, 25];

foreach ($testes as $teste) {
    if (ehPrimo($teste)) {
        echo $teste . " é primo" . PHP_EOL;
    } else {
        echo $teste . " não é primo" . PHP_EOL;
    }
}
