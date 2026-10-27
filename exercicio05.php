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

/* Explicação: Uso uma variável $soma que começa em 0. O for passa por todos os números de 1 a 100 e vai somando cada um dentro de $soma. No final imprimo o total (5050). */

$soma = 0;

for ($i = 1; $i <= 100; $i++) {
    $soma = $soma + $i;
}

echo "A soma dos números de 1 a 100 é: " . $soma . PHP_EOL;
