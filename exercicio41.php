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

/* Explicação: Diferente do procedimento, a função devolve um valor com return. Aqui ela devolve a soma dos dois números, e eu guardo o resultado em uma variável para imprimir. */

function somar($a, $b)
{
    return $a + $b;
}

$resultado = somar(10, 5);

echo "A soma é: " . $resultado . PHP_EOL;
