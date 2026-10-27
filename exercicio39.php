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

/* Explicação: O procedimento recebe um número e usa um for que começa nele e vai diminuindo 1 a cada volta, até chegar em 0. */

function contagemRegressiva($numero)
{
    for ($i = $numero; $i >= 0; $i--) {
        echo $i . PHP_EOL;
    }
}

contagemRegressiva(10);
