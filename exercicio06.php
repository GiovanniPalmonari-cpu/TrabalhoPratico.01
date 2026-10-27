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

/* Explicação: Crio a variável $i com valor 1 antes do while. Enquanto $i for menor ou igual a 10, imprimo o valor e aumento 1. Sem o $i++ o laço nunca terminaria. */

$i = 1;

while ($i <= 10) {
    echo $i . PHP_EOL;
    $i++;
}
