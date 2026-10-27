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

/* Explicação: A área do retângulo é largura vezes altura. A função faz essa multiplicação e retorna o resultado. */

function calcularAreaRetangulo($largura, $altura)
{
    return $largura * $altura;
}

$area = calcularAreaRetangulo(5, 3);

echo "A área do retângulo é: " . $area . PHP_EOL;
