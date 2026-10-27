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

/* Explicação: Repito o array do exercício 16. O foreach pega cada elemento do array, um por vez, coloca na variável $cidade e eu imprimo com uma quebra de linha. */

$cidades = ["Curitiba", "São Paulo", "Rio de Janeiro", "Florianópolis", "Porto Alegre"];

foreach ($cidades as $cidade) {
    echo $cidade . PHP_EOL;
}
