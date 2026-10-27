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

/* Explicação: O procedimento soma as duas notas e divide por 2 para achar a média. Depois um if/else verifica se a média é maior ou igual a 7 para imprimir Aprovado ou Reprovado. */

function calcularMediaAluno($nota1, $nota2)
{
    $media = ($nota1 + $nota2) / 2;

    echo "Média: " . number_format($media, 1, ",", ".") . PHP_EOL;

    if ($media >= 7) {
        echo "Situação: Aprovado" . PHP_EOL;
    } else {
        echo "Situação: Reprovado" . PHP_EOL;
    }
}

calcularMediaAluno(8, 7);
calcularMediaAluno(5, 6);
