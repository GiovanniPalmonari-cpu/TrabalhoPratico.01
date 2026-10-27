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

/* Explicação: Repito o array do exercício 23. O foreach passa por cada produto (que é um array) e, dentro dele, acesso as chaves nome e preco. Uso number_format para mostrar o preço com vírgula e duas casas decimais. */

$produtos = [
    ["nome" => "Caderno", "preco" => 15.90],
    ["nome" => "Caneta", "preco" => 3.50],
    ["nome" => "Mochila", "preco" => 89.99]
];

foreach ($produtos as $produto) {
    echo "Produto: " . $produto["nome"] . " - Preço: R$ " . number_format($produto["preco"], 2, ",", ".") . PHP_EOL;
}
