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

/* Explicação: A função cria um array vazio e usa um for que começa em 0 e soma 2 a cada volta até chegar em n. Cada número é adicionado ao array com $pares[] = $i. No final retorna o array. */

function gerarArrayPares($n)
{
    $pares = [];

    for ($i = 0; $i <= $n; $i += 2) {
        $pares[] = $i;
    }

    return $pares;
}

$resultado = gerarArrayPares(15);

print_r($resultado);
