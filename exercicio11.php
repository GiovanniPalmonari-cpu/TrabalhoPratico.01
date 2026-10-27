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

/* Explicação: No do-while o bloco executa primeiro e a condição é testada depois. Imprimo $i, somo 1, e repito enquanto $i for menor ou igual a 10. */

$i = 1;

do {
    echo $i . PHP_EOL;
    $i++;
} while ($i <= 10);
