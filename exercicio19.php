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

/* Explicação: Repito o array do exercício 17. O foreach passa por cada número e soma na variável $soma, que começa em 0. No final imprimo o total. */

$numeros = [4, 8, 15, 16, 23, 42, 7, 19, 31, 50];
$soma = 0;

foreach ($numeros as $numero) {
    $soma = $soma + $numero;
}

echo "A soma de todos os números é: " . $soma . PHP_EOL;
