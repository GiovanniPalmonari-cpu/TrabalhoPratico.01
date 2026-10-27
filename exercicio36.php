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

/* Explicação: O procedimento usa um for que repete 20 vezes e imprime um hífen a cada volta. No final há uma quebra de linha. */

function desenharLinha()
{
    for ($i = 1; $i <= 20; $i++) {
        echo "-";
    }
    echo PHP_EOL;
}

desenharLinha();
