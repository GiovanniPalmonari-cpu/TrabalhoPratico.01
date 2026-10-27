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

/* Explicação: Um número é par quando o resto da divisão por 2 é 0 (usando o operador %). O procedimento testa isso com if/else e imprime o resultado. */

function verificarParImpar($numero)
{
    if ($numero % 2 == 0) {
        echo $numero . " é Par" . PHP_EOL;
    } else {
        echo $numero . " é Ímpar" . PHP_EOL;
    }
}

verificarParImpar(8);
verificarParImpar(15);
