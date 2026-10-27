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

/* Explicação: A função count() devolve a quantidade de elementos de um array. Guardo o resultado em $quantidade e imprimo. */

$numeros = [3, 6, 9, 12, 15, 18, 21];

$quantidade = count($numeros);

echo "O array possui " . $quantidade . " elementos." . PHP_EOL;
