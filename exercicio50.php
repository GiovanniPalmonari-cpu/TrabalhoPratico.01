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

/* Explicação: A função separa a string em caracteres Unicode e percorre o array do último caractere até o primeiro, juntando-os no resultado. Assim, acentos não são separados dos seus caracteres. */

function inverterString($texto)
{
    $caracteres = preg_split('//u', $texto, -1, PREG_SPLIT_NO_EMPTY);
    $invertido = "";

    for ($i = count($caracteres) - 1; $i >= 0; $i--) {
        $invertido .= $caracteres[$i];
    }

    return $invertido;
}

echo inverterString("Programação") . PHP_EOL;
echo inverterString("PHP") . PHP_EOL;
