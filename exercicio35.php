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

/* Explicação: O procedimento recebe um array como parâmetro e usa foreach para imprimir cada elemento em uma linha. */

function imprimirArray($array)
{
    foreach ($array as $elemento) {
        echo $elemento . PHP_EOL;
    }
}

$frutas = ["Banana", "Maçã", "Uva", "Laranja"];
imprimirArray($frutas);
