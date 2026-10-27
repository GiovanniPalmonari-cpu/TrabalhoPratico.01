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

/* Explicação: O for de fora passa pelos números de 2 até 50. Para cada número, o for de dentro tenta dividir por todos os valores entre 2 e o número anterior. Se alguma divisão der resto 0 ($n % $i == 0), o número não é primo e o laço é interrompido com break. Se nenhuma divisão for exata, o número é primo e é impresso. */

for ($n = 2; $n <= 50; $n++) {
    $ehPrimo = true;

    for ($i = 2; $i < $n; $i++) {
        if ($n % $i == 0) {
            $ehPrimo = false;
            break;
        }
    }

    if ($ehPrimo) {
        echo $n . PHP_EOL;
    }
}
