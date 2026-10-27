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

/* Explicação: A função sort() reorganiza o próprio array em ordem crescente. Depois de chamar sort(), uso um foreach para mostrar os valores já ordenados. */

$numeros = [10, 2, 5, 8, 1];

sort($numeros);

echo "Array em ordem crescente:" . PHP_EOL;
foreach ($numeros as $numero) {
    echo $numero . PHP_EOL;
}
