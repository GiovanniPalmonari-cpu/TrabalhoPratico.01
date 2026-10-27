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

/* Explicação: A função compara os dois números com if. Se o primeiro for maior, retorna o primeiro. Caso contrário, retorna o segundo. */

function maiorNumero($a, $b)
{
    if ($a > $b) {
        return $a;
    } else {
        return $b;
    }
}

echo "O maior número é: " . maiorNumero(12, 30) . PHP_EOL;
echo "O maior número é: " . maiorNumero(50, 8) . PHP_EOL;
