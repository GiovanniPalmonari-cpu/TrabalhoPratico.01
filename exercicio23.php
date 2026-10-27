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

/* Explicação: Crio um array principal onde cada posição é outro array associativo com as chaves nome e preco. Isso forma uma lista de produtos. Mostro com print_r. */

$produtos = [
    ["nome" => "Caderno", "preco" => 15.90],
    ["nome" => "Caneta", "preco" => 3.50],
    ["nome" => "Mochila", "preco" => 89.99]
];

print_r($produtos);
